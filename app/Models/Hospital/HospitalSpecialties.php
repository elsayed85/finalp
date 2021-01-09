<?php

namespace App\Models\Hospital;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;

class HospitalSpecialties extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function specialty()
    {
        return $this->belongsTo(MedicalSpecialties::class, 'specialty_id');
    }
}
