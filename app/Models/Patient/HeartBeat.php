<?php

namespace App\Models\Patient;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HeartBeat extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(User::class);
    }
}
