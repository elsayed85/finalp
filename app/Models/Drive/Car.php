<?php

namespace App\Models\Drive;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Malhal\Geographical\Geographical;
use Spatie\ModelStatus\HasStatuses;

class Car extends Model
{
    use HasStatuses, Geographical;

    const LATITUDE  = 'lat';
    const LONGITUDE = 'lng';

    protected static $kilometers = true;

    protected $casts = [
        'lat' => 'double',
        'lng' => 'double'
    ];


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function drives()
    {
        return $this->hasMany(Drive::class);
    }

    public function LastDrive()
    {
        return $this->drives()->latest()->first();
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', 1);
    }

    public function setAsAvailable()
    {
        $this->update(['is_available' => true]);
        return $this;
    }

    public function setAsUnAvailable()
    {
        $this->update(['is_available' => false]);
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
