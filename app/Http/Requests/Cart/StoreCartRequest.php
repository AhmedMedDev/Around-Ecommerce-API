<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCartRequest extends FormRequest
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
            'product_id'    => 'required|exists:App\Models\Product,id',
            'quantity'      => 'integer',
            'size_id'       => 'required|exists:App\Models\Size,id',
            'color_id'      => 'required|exists:App\Models\Color,id',
        ];
    }
}
