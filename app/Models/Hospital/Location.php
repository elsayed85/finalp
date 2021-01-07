<?php

namespace App\Models\Hospital;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
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
