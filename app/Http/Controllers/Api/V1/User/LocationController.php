<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\User\UpdateCurrentLocationRequest;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function updateCurrentLocation(UpdateCurrentLocationRequest $request)
    {
        auth()->user()->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'location updated succfully',
            'location' => $request->validated()
        ]);
    }
}
