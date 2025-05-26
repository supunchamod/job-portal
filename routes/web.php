<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ResumeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job:slug}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/candidate-dashboard', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/my-profile', [CandidateController::class, 'profile'])->name('candidate.profile');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/candidate/change-password', [ProfileController::class, 'password'])
        ->name('candidate.password.change');
    Route::get('/password/reset', [ProfileController::class, 'index'])->name('password.reset');
    Route::get('/candidate/delete-account', [ProfileController::class, 'show'])->name('candidate.account.delete');
    Route::delete('/candidate/delete-account', [ProfileController::class, 'deleteAccount'])->name('candidate.account.destroy');


});

Route::middleware(['auth'])->group(function () {
    Route::get('/candidate', [HomeController::class, 'candidateDashboard'])->name('candidate.dashboard');
    Route::get('/employer', [HomeController::class, 'employerDashboard'])->name('employer.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/candidate-profile/edit', [ProfileController::class, 'edit'])->name('candidate-profile.edit');
    Route::post('/candidate-profile/update', [CandidateController::class, 'update'])->name('candidate-profile.update');
    
});

Route::middleware(['auth'])->group(function () {
    Route::get('/candidate/resume', [ResumeController::class, 'index'])->name('candidate.resume');
    Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');
    Route::delete('/resume/{id}', [ResumeController::class, 'destroy'])->name('resume.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/education/store', [ResumeController::class, 'education'])->name('education.store');
    Route::delete('/education/{id}', [ResumeController::class, 'destroyEducation'])->name('education.delete');
    Route::post('/experience/store', [ResumeController::class, 'experience'])->name('experience.store');
    Route::delete('/experience/{id}', [ResumeController::class, 'experienceDestroy'])->name('experience.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])->name('jobs.apply');
    Route::get('/candidate/applied-jobs', [JobController::class, 'appliedJobs'])->name('candidate.appliedJobs');
    Route::post('/jobs/{job}/apply/form', [JobController::class, 'submitApplication'])->name('jobs.apply.form');
    Route::get('/candidate/applied-search', [JobController::class, 'search'])->name('candidate.applied.search');


});




require __DIR__.'/auth.php';
