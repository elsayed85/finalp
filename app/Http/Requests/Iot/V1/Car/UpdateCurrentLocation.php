<?php

namespace App\Http\Requests\Iot\V1\Car;

use App\Models\Drive\Car;
use App\Rules\LocationCoordinates\LatitudeRule;
use App\Rules\LocationCoordinates\LongitudeRule;
use App\Services\Location\Parser;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrentLocation extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        // return [
        //     "lat" => ['required', new LatitudeRule()],
        //     'lng' => ['required', new LongitudeRule()]
        // ];
        return [];
    }

    protected function prepareForValidation(): void
    {

        if ($location = $this->location) {
            $data = (object)(new Parser())->readLine($location)->toArray();
            $this->merge([
                'lat' => (float) $data->latitude,
                'lng' => (float) $data->longitude,
            ]);
        }
    }
}
