<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreReviewRequest extends FormRequest
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
            're_des'     =>'string|max:255',
            're_rate'    =>'integer|digits_between:1,5',
            'product_id' => 'exists:App\Models\Product,id',
            'user_id'    =>'exists:App\User,id|in:' . Auth::user()->id ,
        ];
    }
}
