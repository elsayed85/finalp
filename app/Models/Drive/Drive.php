<?php

namespace App\Models\Drive;

use App\Models\Drive\Traits\DrivingTrait;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;
use Spatie\ModelStatus\HasStatuses;

class Drive extends Model
{
    use DrivingTrait, HasStatuses, Geographical;

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

    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function currentLocation()
    {
        return $this->locations()->latest()->first();
    }
}
