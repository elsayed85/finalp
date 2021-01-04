<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function all()
    {
        $user = auth()->user();
        return response()->json([
            'email_verified' => $user->hasVerifiedEmail(),
            'phone_verified' => $user->phoneIsVerified(),
        ]);
    }

    public function email()
    {
        return response()->json([
            'email_verified' => auth()->user()->hasVerifiedEmail(),
        ]);
    }

    public function phone()
    {
        return response()->json([
            'phone_verified' => auth()->user()->phoneIsVerified(),
        ]);
    }
}
