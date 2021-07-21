<?php

namespace App\Http\Requests\ProductSize;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductSizeRequest extends FormRequest
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
            'size_id' => 'required|exists:App\Models\Size,id',
        ];
    }
}
