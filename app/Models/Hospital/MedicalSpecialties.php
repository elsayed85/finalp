<?php

namespace App\Models\Hospital;

use App\Hospital;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class MedicalSpecialties extends Model
{
    use Sluggable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo(MedicalSpecialties::class, 'parent_id');
    }

    public function getParentsNames()
    {
        $parents = collect([]);
        if ($this->parent) {
            $parent = $this->parent;
            while (!is_null($parent)) {
                $parents->push($parent);
                $parent = $parent->parent;
            }
            return $parents->push($this);
        } else {
            return [$this];
        }
    }

    public function childs()
    {
        return $this->hasMany(MedicalSpecialties::class, 'parent_id', 'id');
    }

    public function childrenRecursive()
    {
        return $this->childs()->with(['childrenRecursive']);
    }

    public function scopeIds($query, $parent_id = null)
    {
        $parent_id  = is_null($parent_id) ? $this->id : $parent_id;
        $test = $query->where('parent_id', $parent_id)
            ->with(['childrenRecursive:id,parent_id']);
        $ids = $test->get(['id', 'parent_id']);
        $mainIds = $ids->pluck('id');
        $data  = $ids->map->childrenRecursive->collapse()->pluck('id')
            ->push($parent_id)
            ->merge($mainIds)
            ->filter()
            ->all();
        return $data;
    }

    public function allHospitals()
    {
        return Hospital::whereHas("specialties", function ($category) {
            return $category->whereIn("hospital_specialties.specialty_id", $this->ids());
        });
    }
}
