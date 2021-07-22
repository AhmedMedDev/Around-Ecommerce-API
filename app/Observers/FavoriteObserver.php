<?php

namespace App\Observers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Cache;

class FavoriteObserver
{
    /**
     * Handle the favorite "created" event.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return void
     */
    public function created(Favorite $favorite)
    {
        Cache::forget('favorites');
    }

    /**
     * Handle the favorite "updated" event.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return void
     */
    public function updated(Favorite $favorite)
    {
        Cache::forget('favorites');
    }

    /**
     * Handle the favorite "deleted" event.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return void
     */
    public function deleted(Favorite $favorite)
    {
        Cache::forget('favorites');
    }

}
