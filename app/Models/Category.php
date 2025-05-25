<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'icon'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // Accessor for active job count
    public function getActiveJobsCountAttribute()
    {
        return $this->jobs()
            ->where('deadline', '>=', now())
            ->count();
    }
}
