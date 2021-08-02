<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
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
            'compony_name'  => 'string|regex:/^[a-zA-Z ]+$/',
            'country'       => 'string|regex:/^[a-zA-Z ]+$/',
            'street'        => 'string|regex:/^[a-zA-Z ]+$/',
            'apartment'     => 'string',
            'city'          => 'string|regex:/^[a-zA-Z ]+$/',
            'postcode'      => 'string',
            'phone'         => 'string|numeric',
        ];
    }
}
