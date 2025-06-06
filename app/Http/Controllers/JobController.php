<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use App\Services\NotificationService;
use Illuminate\Support\Str;



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

        return view('jobs.jobs', compact('jobs', 'categories'));
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
        // Validate form inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|integer',
            'type' => 'required|string',
            'job_level' => 'required|string',
            'experience' => 'required|string',
            'qualification' => 'required|string',
            'short_description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'gender' => 'nullable|string',
            'min_salary' => 'nullable|numeric',
            'max_salary' => 'nullable|numeric|gte:min_salary',
            'expired_date' => 'required|date|after:today',
            'job_fee_type' => 'required|string',
            'skills' => 'nullable|string',
            'job_place' => 'nullable|string',
            'permanent_address' => 'nullable|string|max:255',
            'total_openings' => 'nullable|in:1,2,3,4,5,6,10+',

            
        ]);

        $slug = Str::slug($validated['title']) . '-' . uniqid();

        // Create new job record (adjust fields according to your DB schema)
        $job = Job::create([
            'title' => $validated['title'],
            'slug' => $slug, // ✅ Set slug
            'short_description' => $validated['short_description'],
            'description' => $validated['description'],
            'responsibilities' => $validated['responsibilities'],
            'requirements' => $validated['requirements'],
            'category_id' => $validated['category_id'],
            'type' => $validated['type'],
            'job_level' => $validated['job_level'],
            'experience' => $validated['experience'],
            'qualification' => $validated['qualification'],
            'gender' => $validated['gender'] ?? null,
            'min_salary' => $validated['min_salary'] ?? null,
            'max_salary' => $validated['max_salary'] ?? null,
            'deadline' => $validated['expired_date'],
            'job_fee_type' => $validated['job_fee_type'],
            'skills' => $validated['skills'] ?? null,
            'permanent_address' => $validated['permanent_address'] ?? null,
            'total_openings' => $request->total_openings,
            'company_id' => auth()->user()->company?->id,
             'user_id' => auth()->user(),
        ]);

        // Redirect somewhere with success message
         return back()->with('success', 'Job application submitted successfully!');
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
        return view('jobs.show', compact('job'));
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
        $job = Job::findOrFail($id);

        // Optional: check if the authenticated employer owns this job
        if (auth()->id() !== $job->user_id) {
            abort(403);
        }

        $job->delete();

        return redirect()->back()->with('success', 'Job deleted successfully.');
    }
}


