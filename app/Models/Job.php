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
        'description',
        'category_id',
        'company_id',
        'location',
        'salary',
        'type',
        'deadline'
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
