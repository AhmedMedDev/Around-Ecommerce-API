<?php

namespace App\Observers;

use App\Models\Offer;
use Illuminate\Support\Facades\Cache;

class OfferObserver
{
    /**
     * Handle the offer "created" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function created(Offer $offer)
    {
        Cache::forget('offers');
    }

    /**
     * Handle the offer "updated" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function updated(Offer $offer)
    {
        Cache::forget('offers');
    }

    /**
     * Handle the offer "deleted" event.
     *
     * @param  \App\Models\Offer  $offer
     * @return void
     */
    public function deleted(Offer $offer)
    {
        Cache::forget('offers');
    }

}
