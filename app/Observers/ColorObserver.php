<?php

namespace App\Observers;

use App\Models\Color;
use Illuminate\Support\Facades\Cache;

class ColorObserver
{
    /**
     * Handle the color "created" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function created(Color $color)
    {
        Cache::forget('colors');
    }

    /**
     * Handle the color "updated" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function updated(Color $color)
    {
        Cache::forget('colors');
    }

    /**
     * Handle the color "deleted" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function deleted(Color $color)
    {
        Cache::forget('colors');
    }

}
