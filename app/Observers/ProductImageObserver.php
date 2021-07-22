<?php

namespace App\Observers;

use App\Models\ProductImage;
use Illuminate\Support\Facades\Cache;

class ProductImageObserver
{
    /**
     * Handle the product image "created" event.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return void
     */
    public function created(ProductImage $productImage)
    {
        Cache::forget('product_images');
    }

    /**
     * Handle the product image "updated" event.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return void
     */
    public function updated(ProductImage $productImage)
    {
        Cache::forget('product_images');
    }

    /**
     * Handle the product image "deleted" event.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return void
     */
    public function deleted(ProductImage $productImage)
    {
        Cache::forget('product_images');
    }

}
