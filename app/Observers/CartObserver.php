<?php

namespace App\Observers;

use App\Models\Cart;
use Illuminate\Support\Facades\Cache;

class CartObserver
{
    /**
     * Handle the cart "created" event.
     *
     * @param  \App\Models\Cart  $cart
     * @return void
     */
    public function created(Cart $cart)
    {
        Cache::forget('carts');
    }

    /**
     * Handle the cart "updated" event.
     *
     * @param  \App\Models\Cart  $cart
     * @return void
     */
    public function updated(Cart $cart)
    {
        Cache::forget('carts');
    }

    /**
     * Handle the cart "deleted" event.
     *
     * @param  \App\Models\Cart  $cart
     * @return void
     */
    public function deleted(Cart $cart)
    {
        Cache::forget('carts');
    }

}
