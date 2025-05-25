<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'user_informations';

        protected $fillable = [
        'user_id', 'job_title', 'age', 'education', 'experience', 'language', 'about',
        'phone', 'address', 'address2', 'country', 'city', 'zip_code',
        'facebook', 'twitter', 'instagram', 'linkedin', 'google_plus', 'profile_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

