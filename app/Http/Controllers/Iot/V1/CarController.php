<?php

namespace App\Http\Controllers\Iot\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Iot\V1\Car\SetCurrentPatientRequest;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function setCurrentPatient(SetCurrentPatientRequest $request)
    {
        auth()->user()->setCurrentPatient($request->patient_id);
        return response()->noContent();
    }
}
