<?php

namespace App\Http\Requests;

use App\Rules\CarRules;
use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required',
            'passport' => 'required',
            'car_id' => 'required',
            'to_date' => 'required',
            'from_date' => 'required',
            'certificate' => [ 'required',  new CarRules() ],

        ];
    }
}
