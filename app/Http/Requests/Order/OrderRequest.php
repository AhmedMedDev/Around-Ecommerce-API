<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrderRequest extends FormRequest
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
            // 'payment_method' =>'required|in:'. implode(',',['Credit Card','PayPal','Cash on delivery']),
            'payment_method' =>'required|in:Credit Card,PayPal,Cash on delivery',
            'total_price'    =>'required|between:0,99.99',
            'address_id'     =>'required|exists:App\Models\Address,id', 
        ];
    }
}
