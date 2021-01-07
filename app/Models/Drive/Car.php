<?php

namespace App\Models\Drive;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class Car extends Model
{
    use HasStatuses;
    
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
        return $query->where('is_available', true);
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
