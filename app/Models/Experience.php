<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

        protected $fillable = [
        'user_id',
        'job_title',
        'joining_date',
        'end_date',
        'company_name',
        'description',
    ];

}
