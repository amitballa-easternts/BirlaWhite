<?php

namespace App\Http\Requests\BankVerification;

use Illuminate\Foundation\Http\FormRequest;

class BankValidationRequest extends FormRequest
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
            'id_number' => 'required | regex:/^[0-9_.-]*$/',
            'ifsc' => 'required | regex:/^[a-zA-Z_0-9_.-]*$/',
        ];
    }
}
