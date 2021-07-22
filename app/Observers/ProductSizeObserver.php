<?php

namespace App\Observers;

use App\Models\ProductSize;
use Illuminate\Support\Facades\Cache;

class ProductSizeObserver
{
    /**
     * Handle the product size "created" event.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return void
     */
    public function created(ProductSize $productSize)
    {
        Cache::forget('product_sizes');
    }

    /**
     * Handle the product size "updated" event.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return void
     */
    public function updated(ProductSize $productSize)
    {
        Cache::forget('product_sizes');
    }

    /**
     * Handle the product size "deleted" event.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return void
     */
    public function deleted(ProductSize $productSize)
    {
        Cache::forget('product_sizes');
    }

    /**
     * Handle the product size "restored" event.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return void
     */
    public function restored(ProductSize $productSize)
    {
        //
    }

    /**
     * Handle the product size "force deleted" event.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return void
     */
    public function forceDeleted(ProductSize $productSize)
    {
        //
    }
}
