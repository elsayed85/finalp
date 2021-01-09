<?php

namespace App\Models\Drive;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'd_lat' => 'double',
        'd_lng' => 'double'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'drive_locations';


    public function drive()
    {
        return $this->belongsTo(Drive::class);
    }
}
