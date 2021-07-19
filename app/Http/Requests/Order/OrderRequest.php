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
            'user_id'        =>'exists:App\User,id|in' . Auth::user()->id,
            'payment_method' =>'required|in:'. implode(',',['Credit Card','PayPal','Cash on delivery']),
            'total_price'    =>'integer',
            'address_id'     =>'exists:App\Models\Address,id', //Must make Sure that this id belonge to auth user
        ];
    }
}
