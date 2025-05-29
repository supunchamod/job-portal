<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInformation;
use App\Models\Company;
use App\Services\NotificationService;


class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $info = $user->information;
        return view('candidate.candidate-dash',compact('user', 'info'));
    }

     public function profile()
    {   
        $user = Auth::user();
        $info = $user->information;
        return view('candidate.profile',compact('user', 'info'));
    }

        public function update(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'job_title' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'education' => 'nullable|string',
            'experience' => 'nullable|string',
            'language' => 'nullable|string',
            'about' => 'nullable|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $data['profile_image'] = $path;
        }

        $user->information()->updateOrCreate(
            ['user_id' => $user->id],
            $data
        );

        NotificationService::create(auth()->id(), 'profile_updated', 'Your profile was updated.');

        return back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employer()
    {
        $companies = Company::all();
        return view('candidate.employer', compact('companies'));
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
    public function show($slug)
    {
        $company = Company::with('jobs')->where('slug', $slug)->firstOrFail();

        // Paginate reviews, e.g., 5 reviews per page
        $reviews = $company->reviews()->with('user')->paginate(5);

        $user = auth()->user();
        $notifications = $user->notifications()->latest()->take(5)->get();

        return view('candidate.employer-details', compact('company', 'reviews','notifications'));
    }

    public function followCompany(Request $request)
    {
        $user = auth()->user();
        $search = $request->input('search');

        $companies = $user->followedCompanies()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('location', 'like', '%' . $search . '%');
                });
            })
            ->paginate(10)
            ->withQueryString(); // keeps search term in pagination links

        return view('candidate.follow-company', compact('companies'));
    }

    public function savedJobs(Request $request)
    {
        $user = auth()->user();

        $query = $user->savedJobs()->with('company');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('location', 'like', '%' . $request->search . '%')
                ->orWhereHas('company', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->search . '%');
                });
            });
        }

        $jobs = $query->latest()->paginate(10);

        return view('candidate.saved-job', compact('jobs'));
    }


    public function unsave($id)
    {
        auth()->user()->savedJobs()->detach($id);
        return back()->with('success', 'Job removed from saved list.');
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
