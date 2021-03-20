<?php

namespace App\Models\Drive;

use App\Hospital;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Malhal\Geographical\Geographical;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Car extends Authenticatable
{
    use HasStatuses, Geographical, HasApiTokens;
    use Uuid , Notifiable;

    const LATITUDE  = 'lat';
    const LONGITUDE = 'lng';

    protected static $kilometers = true;

    protected $casts = [
        'lat' => 'double',
        'lng' => 'double'
    ];

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    protected $hidden = [
        'private_key',
    ];

    /**
     * @return mixed|string
     */
    public function getAuthPassword()
    {
        return $this->private_key;
    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'private-Car.' . $this->id;
    }

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
}
