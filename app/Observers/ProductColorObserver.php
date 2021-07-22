<?php

namespace App\Observers;

use App\Models\ProductColor;
use Illuminate\Support\Facades\Cache;

class ProductColorObserver
{
    /**
     * Handle the product color "created" event.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return void
     */
    public function created(ProductColor $productColor)
    {
        Cache::forget('product_colors');
    }

    /**
     * Handle the product color "updated" event.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return void
     */
    public function updated(ProductColor $productColor)
    {
        Cache::forget('product_colors');
    }

    /**
     * Handle the product color "deleted" event.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return void
     */
    public function deleted(ProductColor $productColor)
    {
        Cache::forget('product_colors');
    }

    /**
     * Handle the product color "restored" event.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return void
     */
    public function restored(ProductColor $productColor)
    {
        //
    }

    /**
     * Handle the product color "force deleted" event.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return void
     */
    public function forceDeleted(ProductColor $productColor)
    {
        //
    }
}
