<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;
use App\Models\Company;
use App\Models\Review;
use App\Models\Message;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;




class HomeController extends Controller
{
    public function index()
    {
        // Get categories with active job counts (optimized single query)
        $categories = Category::query()
            ->withCount(['jobs as active_jobs' => function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            }])
            ->whereHas('jobs', function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            })
            ->orderBy('active_jobs', 'desc')
            ->take(8) // Limit to 8 categories with most jobs
            ->get();

        // Get featured jobs with eager loading (optimized for performance)
        $featuredJobs = Job::query()
            ->with(['company' => function($query) {
                $query->select('id', 'name', 'logo', 'slug');
            }])
            ->where('is_featured', true)
            ->where('deadline', '>=', now())
            ->orderBy('is_urgent', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get(['id', 'title', 'slug', 'company_id', 'min_salary','max_salary', 'type', 'total_openings', 'is_urgent', 'created_at']);

         $companies = Company::with(['services', 'jobs'])
        ->withCount(['jobs as jobs_count' => function($query) {
            $query->where('is_active', true)
                  ->where('deadline', '>=', now());
        }])
        ->orderByDesc('jobs_count')
        ->take(8) // Limit to 8 top companies
        ->get();

        $candidates = User::where('role', 'candidate')
        ->with('information') // if you store extra info in related model
        ->paginate(12);
 
        return view('index', compact('categories', 'featuredJobs','companies','candidates'));
    }

     public function candidateDashboard()
    {
        // Get categories with active job counts (optimized single query)
        $categories = Category::query()
            ->withCount(['jobs as active_jobs' => function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            }])
            ->whereHas('jobs', function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            })
            ->orderBy('active_jobs', 'desc')
            ->take(8) // Limit to 8 categories with most jobs
            ->get();

        // Get featured jobs with eager loading (optimized for performance)
         $featuredJobs = Job::query()
            ->with(['company' => function($query) {
                $query->select('id', 'name', 'logo', 'slug');
            }])
            ->where('is_featured', true)
            ->where('deadline', '>=', now())
            ->orderBy('is_urgent', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get(['id', 'title', 'slug', 'company_id', 'min_salary','max_salary', 'type', 'total_openings', 'is_urgent', 'created_at']);

         $companies = Company::with(['services', 'jobs'])
        ->withCount(['jobs as jobs_count' => function($query) {
            $query->where('is_active', true)
                  ->where('deadline', '>=', now());
        }])
        ->orderByDesc('jobs_count')
        ->take(8) // Limit to 8 top companies
        ->get();
 
        return view('candidate.index', compact('categories', 'featuredJobs','companies'));
    }

      public function employerDashboard()
    {
        // Get categories with active job counts (optimized single query)
        $categories = Category::query()
            ->withCount(['jobs as active_jobs' => function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            }])
            ->whereHas('jobs', function($query) {
                $query->where('deadline', '>=', now())
                    ->where('is_active', true);
            })
            ->orderBy('active_jobs', 'desc')
            ->take(8) // Limit to 8 categories with most jobs
            ->get();

        // Get featured jobs with eager loading (optimized for performance)
        $featuredJobs = Job::query()
            ->with(['company' => function($query) {
                $query->select('id', 'name', 'logo', 'slug');
            }])
            ->where('is_featured', true)
            ->where('deadline', '>=', now())
            ->orderBy('is_urgent', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get(['id', 'title', 'slug', 'company_id', 'min_salary','max_salary', 'type', 'total_openings', 'is_urgent', 'created_at']);

         $companies = Company::with(['services', 'jobs'])
        ->withCount(['jobs as jobs_count' => function($query) {
            $query->where('is_active', true)
                  ->where('deadline', '>=', now());
        }])
        ->orderByDesc('jobs_count')
        ->take(8) // Limit to 8 top companies
        ->get();
 
        return view('employer.index', compact('categories', 'featuredJobs','companies'));
    }

    public function follow($id)
    {
        $user = Auth::user();
        $company = Company::findOrFail($id);

        $user->followedCompanies()->syncWithoutDetaching([$company->id]);

        return back()->with('success', 'You are now following ' . $company->name);
    }

    public function unfollow($id)
    {
        $user = Auth::user();
        $company = Company::findOrFail($id);

        $user->followedCompanies()->detach($company->id);

        return back()->with('success', 'You have unfollowed ' . $company->name);
    }

    public function reviews(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'company_id' => $request->company_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Review submitted successfully!');
    }

    public function saveJob(Request $request, $jobId)
    {
        $user = auth()->user();

        // Check if already saved
        if ($user->savedJobs()->where('job_id', $jobId)->exists()) {
            return response()->json(['message' => 'Job already saved'], 409);
        }

        $user->savedJobs()->attach($jobId);

        return response()->json(['message' => 'Job saved successfully']);
    }

    public function unsaveJob(Request $request, $jobId)
    {
        $user = auth()->user();
        $user->savedJobs()->detach($jobId);

        return response()->json(['message' => 'Job removed from saved list']);
    }   


    public function sendMessage(Request $request, $userId)
    {
        $request->validate(['message' => 'required|string']);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent!');
    }

    





}
