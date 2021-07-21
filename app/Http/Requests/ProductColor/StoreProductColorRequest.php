<?php

namespace App\Http\Requests\ProductColor;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductColorRequest extends FormRequest
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
            'color_id'   => 'required|exists:App\Models\Color,id',
            'product_id' => 'required|exists:App\Models\Product,id',
        ];
    }
}
