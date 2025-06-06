<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'responsibilities',
        'requirements',
        'category_id',
        'company_id',
        'type',
        'job_level',
        'experience',
        'qualification',
        'gender',
        'min_salary',
        'max_salary',
        'deadline',
        'job_fee_type',
        'skills',
        'permanent_address',
        'job_place',
        'total_openings',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applicants()
    {
        return $this->belongsToMany(User::class, 'job_applications')
                    ->withTimestamps()
                    ->withPivot('applied_at');
    }
    public function savedByUsers()
    {
        return $this->belongsToMany(User::class, 'saved_jobs')->withTimestamps();
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }



}
