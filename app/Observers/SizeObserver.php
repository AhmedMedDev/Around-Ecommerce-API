<?php

namespace App\Observers;

use App\Models\Size;
use Illuminate\Support\Facades\Cache;

class SizeObserver
{
    /**
     * Handle the size "created" event.
     *
     * @param  \App\Models\Size  $size
     * @return void
     */
    public function created(Size $size)
    {
        Cache::forget('sizes');
    }

    /**
     * Handle the size "updated" event.
     *
     * @param  \App\Models\Size  $size
     * @return void
     */
    public function updated(Size $size)
    {
        Cache::forget('sizes');
    }

    /**
     * Handle the size "deleted" event.
     *
     * @param  \App\Models\Size  $size
     * @return void
     */
    public function deleted(Size $size)
    {
        Cache::forget('sizes');
    }

}
