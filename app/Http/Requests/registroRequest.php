<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registroRequest extends FormRequest
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
            //
        'us_rut' => 'required|min:8|max:10',
        'us_nombre' => 'required|min:2|max:100',
        'us_apellido' => 'required|min:2|max:100',
        'us_email' => 'required|email|min:6|max:100|unique:usuarios',
        'us_pass' => 'required|min:6|max:100',
        ];
    }
}
