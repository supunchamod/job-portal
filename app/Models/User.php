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
        'role'

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
        return $this->role === 'candidate';
    }

    public function isEmployer()
    {
        return $this->role === 'employer';
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

    protected static function booted()
    {
        static::creating(function ($user) {
            $user->slug = Str::slug($user->name);
        });

        static::updating(function ($user) {
            $user->slug = Str::slug($user->name);
        });
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class);
    }

    public function awards()
    {
        return $this->hasMany(Awards::class);
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }









}
