<?php

namespace App\Http\Requests\Iot\V1\Car;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "private_key" => ['required' , 'string' , 'min:1'],
            "public_key" => ['required' , 'string' , 'min:1' , 'exists:cars,public_key'],
        ];
    }
}
