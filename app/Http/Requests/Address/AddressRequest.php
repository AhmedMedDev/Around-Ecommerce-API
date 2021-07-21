<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'compony_name'  => 'required|string|regex:/^[a-zA-Z ]+$/',
            'country'       => 'required|string|regex:/^[a-zA-Z ]+$/',
            'street'        => 'required|string|regex:/^[a-zA-Z ]+$/',
            'apartment'     => 'required|string',
            'city'          => 'required|string|regex:/^[a-zA-Z ]+$/',
            'postcode'      => 'required|string',
            'phone'         => 'required|string|numeric',
        ];
    }
}
