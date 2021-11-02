<?php

namespace App\Http\Requests\Pancard;

use Illuminate\Foundation\Http\FormRequest;

class PanCardValidationRequest extends FormRequest
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
            'id_number' => 'required | regex:/^[A-Z0-9_.-]*$/',
        ];
    }
}
