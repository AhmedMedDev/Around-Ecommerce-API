<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        if ($user->img != "uploads/users/img/default.png")
        {
            \File::delete(public_path($user->img));
        }
    }
}
