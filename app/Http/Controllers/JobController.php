<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use App\Services\NotificationService;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $query = Job::query()->where('is_active', 1);

        if ($request->filled('keyword')) {
            $query->where('title', 'like', '%' . $request->keyword . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('categories')) {
            $query->whereIn('category_id', $request->categories);
        }

        $jobs = $query->paginate(10);

        // Get categories with job counts
        $categories = Category::withCount('jobs')->get();

        $user = auth()->user();
        $notifications = $user->notifications()->latest()->take(5)->get();


        return view('jobs.jobs', compact('jobs', 'categories','notifications'));
    }

    public function apply($jobId)
    {
        $user = auth()->user();

        // Prevent duplicate applications
        if ($user->appliedJobs()->where('job_id', $jobId)->exists()) {
            return back()->with('warning', 'You have already applied to this job.');
        }

        $user->appliedJobs()->attach($jobId, ['applied_at' => now()]);

        NotificationService::create(auth()->id(), 'job_applied', 'You applied for a job.');

        return back()->with('success', 'Job application submitted successfully!');
    }

    public function submitApplication(Request $request, $jobId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $existing = JobApplication::where('user_id', auth()->id())
                ->where('job_id', $jobId)
                ->first();

        if ($existing) {
            return redirect()->back()->with('error', 'You have already applied for this job.');
        }

        $path = $request->file('resume')->store('resumes', 'public');

        JobApplication::create([
            'user_id' => auth()->id(),
            'job_id' => $jobId,
            'applied_at' => now(),
            'resume_path' => $path,
            'create_alert' => $request->has('create_alert'),
        ]);

        NotificationService::create(auth()->id(), 'job_applied', 'You applied for a job.');

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function appliedJobs()
    {
        $user = auth()->user();

         $appliedJobs = JobApplication::with('job')
        ->where('user_id', auth()->id())
        ->latest()
        ->get();

        return view('candidate.applied-job', compact('appliedJobs'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $appliedJobs = Job::where('title', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->orWhere('location', 'like', '%' . $query . '%')
                    ->with(['company', 'category'])
                    ->latest()
                    ->paginate(10);

        return view('candidate.applied-job', compact('appliedJobs', 'query'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $user = auth()->user();
        $notifications = $user->notifications()->latest()->take(5)->get();
        return view('jobs.show', compact('job','notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
