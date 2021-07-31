<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user,User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
                // : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function changePassword(User $user,User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function cart(User $user, User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function favorite(User $user, User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function orders(User $user, User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function addresses(User $user, User $model)
    {
        return $model->id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

}
