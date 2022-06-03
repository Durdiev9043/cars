<?php

namespace App\Http\Requests;

use App\Rules\CarRules;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest1 extends FormRequest
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
            'year'=>'',
            'yurgani'=>'required',
            'model'=>'required',
            'company'=>'required',
            'number'=>'required',
            'img1'=>'',
            'img2'=>'',
            'img3'=>'',
            'img4'=>'',
            'type_fuel'=>['required'],
            'pass_number'=>['required',new CarRules()],
            'status'=>'',
            'price'=>'',
        ];
    }
}
