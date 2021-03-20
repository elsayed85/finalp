<?php

namespace App\Http\Controllers\Iot\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Iot\V1\Car\LoginRequest;
use App\Models\Device;
use App\Models\Drive\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function login(LoginRequest $request)
    {
        $car = Car::where('public_key', $request->public_key)->first();

        if (!$car || !Hash::check($request->private_key, $car->private_key)) {
            throw ValidationException::withMessages([
                'keys' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $car->createToken($car->id)->plainTextToken;

        return response()->json((["token" => $token, 'device_id' => $car->id]));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->user("car")->tokens()->where('id', auth()->user("car")->currentAccessToken()->id)->delete();
        return response()->noContent();
    }
}
