<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ContactUsMessage extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function userByEmail()
    {
        return $this->belongsTo(User::class, 'email');
    }

    public function userByPhone()
    {
        return $this->belongsTo(User::class, 'phone');
    }
}
