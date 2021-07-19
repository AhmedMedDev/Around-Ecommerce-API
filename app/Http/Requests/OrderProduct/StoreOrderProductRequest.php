<?php

namespace App\Http\Requests\OrderProduct;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderProductRequest extends FormRequest
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
            'product_id' => 'exists:App\Models\Product,id',
            'quantity' => 'integer',
            'order_id' => 'exists:App\Models\Order,id',
        ];
    }
}
