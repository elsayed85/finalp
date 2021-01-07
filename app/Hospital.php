<?php

namespace App;

use App\Models\Drive\Car;
use App\Models\Hospital\Location;
use App\Notifications\HospitalResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use OwenIt\Auditing\Contracts\Auditable;
use \OwenIt\Auditing\Auditable as AuditableTrait;

class Hospital extends Authenticatable implements HasMedia, Auditable
{
    use Notifiable, HasMediaTrait, AuditableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $appends = ['logo'];

    // Media Libraray
    public function registerMediaCollections()
    {
        $this->addMediaCollection('logo')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg']);
    }


    public function getLogoAttribute()
    {
        $url = $this->getFirstMediaUrl("logo");
        return !(is_null($url) || empty($url)) ? asset($url) : 'https://ui-avatars.com/api/?rounded=true&size=200&name=' . $this->name;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new HospitalResetPassword($token));
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
