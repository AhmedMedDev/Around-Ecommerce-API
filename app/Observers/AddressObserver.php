<?php

namespace App\Observers;

use App\Models\Address;
use Illuminate\Support\Facades\Cache;

class AddressObserver
{
    /**
     * Handle the address "created" event.
     *
     * @param  \App\Models\Address  $address
     * @return void
     */
    public function created(Address $address)
    {
        Cache::forget('addresses');
    }

    /**
     * Handle the address "updated" event.
     *
     * @param  \App\Models\Address  $address
     * @return void
     */
    public function updated(Address $address)
    {
        Cache::forget('addresses');
    }

    /**
     * Handle the address "deleted" event.
     *
     * @param  \App\Models\Address  $address
     * @return void
     */
    public function deleted(Address $address)
    {
        Cache::forget('addresses');
    }
}
