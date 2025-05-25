<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'user_id',
        'title',
        'academy_name',
        'passing_year',
        'description',
    ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
