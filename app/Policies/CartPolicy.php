<?php

namespace App\Policies;

use App\Models\Cart;
use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CartPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Cart  $cart
     * @return mixed
     */
    public function update(User $user, Cart $cart)
    {
        return $cart->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Cart  $cart
     * @return mixed
     */
    public function delete(User $user, Cart $cart)
    {
        return $cart->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }
}
