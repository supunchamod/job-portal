<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isCandidate()
    {
        return $this->user_type === 'candidate';
    }

    public function isEmployer()
    {
        return $this->user_type === 'employer';
    }

    public function information()
    {
        return $this->hasOne(UserInformation::class);
    }
    
    public function appliedJobs()
    {
        return $this->belongsToMany(Job::class, 'job_applications')
                    ->withTimestamps()
                    ->withPivot('applied_at');
    }
    public function followedCompanies()
    {
        return $this->belongsToMany(Company::class, 'company_follows')->withTimestamps();
    }
    public function savedJobs()
    {
        return $this->belongsToMany(Job::class, 'saved_jobs')->withTimestamps();
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function getIsOnlineAttribute()
    {
        // You can customize how you check online status
        return cache()->has('user-is-online-' . $this->id);
    }







}
