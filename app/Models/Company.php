<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'website',
        'email',
        'location',
        'company_size',
        'established',
        'company_type'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // Accessor for logo URL
    public function getLogoUrlAttribute()
    {
       return asset($this->logo ?? 'assets/img/l-1.png');
    }

    // Accessor for formatted established date
    public function getFormattedEstablishedAttribute()
    {
        return $this->established ? 'Est. ' . $this->established : '';
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'company_follows')->withTimestamps();
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }



    
}
