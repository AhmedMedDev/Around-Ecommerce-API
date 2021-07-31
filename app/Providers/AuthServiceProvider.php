<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Review;
use App\Policies\CartPolicy;
use App\Policies\UserPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        User::class     => UserPolicy::class,
        Cart::class     => CartPolicy::class,
        Favorite::class => FavoritePolicy::class,
        Review::class   => ReviewPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
