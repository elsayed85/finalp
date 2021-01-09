<?php

namespace App\Models\Hospital;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;
use Malhal\Geographical\Geographical;

class Location extends Model
{
    use Geographical;

    const LATITUDE  = 'lat';
    const LONGITUDE = 'lng';

    protected static $kilometers = true;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $casts = [
        'lat' => 'double',
        'lng' => 'double'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hospital_locations';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
