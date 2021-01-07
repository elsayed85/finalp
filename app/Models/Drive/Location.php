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


    public function drive()
    {
        return $this->belongsTo(Drive::class);
    }
}
