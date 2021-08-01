<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'pro_name'         => 'required|string|regex:/^[a-zA-Z ]+$/',
            'pro_des'          => 'required|string',
            'price'            => 'required|between:0,99.99',
            'mainImage'        => 'required|image',
            'category_id'      => 'required|exists:App\Models\Category,id',
            'pro_rate'         => 'required|integer|digits_between:1,5',
            'pro_gender'       => 'required|in:M,F,B',
            'favHeader'        => 'required|boolean',
            'trending'         => 'required|boolean',
            'defaultSize_id'   => 'required|exists:App\Models\Size,id',
            'defaultColor_id'  => 'required|exists:App\Models\Color,id',
        ];
    }
}
