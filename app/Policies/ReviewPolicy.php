<?php

namespace App\Policies;

use App\Models\Review;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Review  $review
     * @return mixed
     */
    public function update(User $user, Review $review)
    {
        return $review->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Review  $review
     * @return mixed
     */
    public function delete(User $user, Review $review)
    {
        return $review->user_id == Auth::user()->id
                ? Response::allow()
                : Response::deny('Unauthenticated, this action for specific user only',401);
    }
}
