<?php

namespace App;

use \OwenIt\Auditing\Auditable as AuditableTrait;
use App\Models\Appointment;
use App\Models\Drive\Drive;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Malhal\Geographical\Geographical;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

// [USER] Model is [Patient]

class User extends Authenticatable implements HasMedia, Auditable
{
    use Notifiable, HasApiTokens, HasMediaTrait, Billable, AuditableTrait, Geographical;

    const LATITUDE  = 'lat';
    const LONGITUDE = 'lng';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',  'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'lat' => 'double',
        'lng' => 'double'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'phone_verified_at', 'email_verified_at'];

    protected $appends = ['avatar'];


    // Media Libraray
    public function registerMediaCollections()
    {
        $this->addMediaCollection('avatar')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg']);
    }


    public function getAvatarAttribute()
    {
        $url = $this->getFirstMediaUrl("avatar");
        return !(is_null($url) || empty($url)) ? asset($url) : 'https://ui-avatars.com/api/?rounded=true&size=200&name=' . $this->name;
    }

    public function phoneIsVerified()
    {
        return !is_null($this->phone_verified_at);
    }

    public function appointments()
    {
        return $this->morphMany(Appointment::class, "owner");
    }

    public function drives()
    {
        return $this->hasMany(Drive::class);
    }
}
