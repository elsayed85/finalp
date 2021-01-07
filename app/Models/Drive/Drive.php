<?php

namespace App\Models\Drive;

use App\Models\Drive\Traits\DrivingTrait;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class Drive extends Model
{
    use DrivingTrait, HasStatuses;

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
