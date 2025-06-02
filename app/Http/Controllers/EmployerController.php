<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Award;
use App\Models\UserInformation;



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
            ->where('slug', $slug)
            ->with('information', 'education', 'experience', 'awards','resumes')
            ->firstOrFail();

       
        return view('employer.candidate-details', compact('candidate'));
    }


}
