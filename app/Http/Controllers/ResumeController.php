<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Award;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $resumes = Resume::where('user_id', auth()->id())->get();
        $educations = Education::where('user_id', auth()->id())->get();
        $experiences = Experience::where('user_id', auth()->id())->get();
        return view('candidate.candidate-resume', compact('resumes','educations','experiences'));
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
        $request->validate([
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // max 5MB
        ]);

        $file = $request->file('resume');

        // Generate unique file name
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Store file in storage/app/public/resumes
        $filePath = $file->storeAs('public/resumes', $fileName);

        // Save resume info in database
        Resume::create([
            'user_id' => Auth::id(),
            'file_name' => $fileName,
            'file_path' => $filePath,
            'file_type' => $file->getClientOriginalExtension(),
        ]);

        return redirect()->back()->with('success', 'Resume uploaded successfully.');
    }

   public function education(Request $request)       
   {
        $request->validate([
            'title' => 'required|string|max:255',
            'academy_name' => 'required|string|max:255',
            'passing_year' => 'required|string|max:10',
            'description' => 'nullable|string',
        ]);

        Education::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'academy_name' => $request->academy_name,
            'passing_year' => $request->passing_year,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Education added successfully.');

    }

    // ExperienceController.php
    public function experience(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:joining_date',
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Experience::create([
            'user_id' => auth()->id(),
            'job_title' => $request->job_title,
            'joining_date' => $request->joining_date,
            'end_date' => $request->end_date,
            'company_name' => $request->company_name,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Experience added successfully.');
    }



    public function destroy($id)
    {
        $resume = Resume::where('user_id', auth()->id())->findOrFail($id);

        Storage::disk('public')->delete($resume->file_path);
        $resume->delete();

        return back()->with('success', 'Resume deleted successfully.');
    }

     public function destroyEducation($id)
    {
        $education = Education::findOrFail($id);

        // Optional: Check if the authenticated user owns this education record
        if ($education->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $education->delete();

        return redirect()->back()->with('success', 'Education record deleted successfully.');
    }
    public function experienceDestroy($id)
    {
        $experience = Experience::findOrFail($id);

        // Ensure the user owns the experience (optional security check)
        if ($experience->user_id !== auth()->id()) {
            abort(403);
        }

        $experience->delete();

        return back()->with('success', 'Experience deleted successfully.');
    }

}
 