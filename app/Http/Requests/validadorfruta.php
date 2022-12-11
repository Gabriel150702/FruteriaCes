<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorfruta extends FormRequest
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
        return ['txtfruta'=>'required|max:50|alpha',
                'txttemp'=>'required|alpha',
                'txtprecio'=>'required|numeric',
                'txtst'=>'required|numeric',
                
            ];
    }
}
