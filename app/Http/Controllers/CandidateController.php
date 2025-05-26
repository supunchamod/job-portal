<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInformation;
use App\Models\Company;

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

        return view('candidate.employer-details', compact('company', 'reviews'));
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
