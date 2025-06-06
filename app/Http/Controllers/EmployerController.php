<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Award;
use App\Models\Resume;
use App\Models\UserInformation;
use App\Models\Company;
use App\Models\Job;
use App\Models\Category;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;


class EmployerController extends Controller
{
    

    public function index()
    {
        $candidates = User::where('role', 'candidate')
            ->with('information') // if you store extra info in related model
            ->paginate(12);

        return view('employer.candidate-list', compact('candidates'));
    }

    public function show($slug)
    {
        $candidate = User::where('role', 'candidate')
            ->whereHas('information', fn($q) => $q->where('slug', $slug))
            ->with(['information', 'experiences', 'educations', 'resumes'])
            ->firstOrFail();

        return view('employer.candidate-details', compact('candidate'));
    }
    
    public function dashboard()
    {
        return view('employer.dashboard');
    }

     public function profile()
    {   
        $company = Company::where('user_id', Auth::id())->firstOrFail();

        return view('employer.profile', compact('company'));
    }

    // Handle update
    public function update(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'location' => 'nullable|string',
            'company_size' => 'nullable|string',
            'established' => 'nullable|string',
            'website' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();

        if (!$company) {
            return redirect()->back()->with('error', 'Company profile not found.');
        }

        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'company_size' => $request->company_size,
            'established' => $request->established,
            'website' => $request->website,
            'facebook_link' => $request->facebook_link,
            'linkedin_link' => $request->linkedin_link,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Company profile updated successfully!');
    }

         public function myjobs()
    {   
        $jobs = Job::where('user_id', Auth::id())->latest()->get();

        return view('employer.my-jobs',compact('jobs'));
    }

    public function create()
    {   
        $categories = Category::all();
        return view('employer.submit-jobs',compact('categories'));
    }
        

    public function manageApplicants()
    {
        $applications = JobApplication::with(['user', 'job'])->latest()->paginate(10);
        return view('employer.applicants', compact('applications'));
    }







}
