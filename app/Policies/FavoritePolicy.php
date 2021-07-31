<?php

namespace App\Policies;

use App\Models\Favorite;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;


class FavoritePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Favorite  $favorite
     * @return mixed
     */
    public function update(User $user, Favorite $favorite)
    {
        return $favorite->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Favorite  $favorite
     * @return mixed
     */
    public function delete(User $user, Favorite $favorite)
    {
        return $favorite->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

}
