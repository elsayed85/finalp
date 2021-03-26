<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            "name" => ['required', 'min:3', 'max:60'],
            "email" => ['required', 'email', 'max:255'],
            "phone" => ['sometimes', 'nullable', 'max:20'],
            "subject" => ['required', 'min:3', 'max:100'],
            "message" => ['required', 'min:3', 'max:10000'],
        ];
    }
}
