<?php

namespace App\Models;

use App\Observers\OfferObserver;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'percentage',
    ];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    protected static function boot()
    {
        parent::boot();

        Offer::observe(OfferObserver::class);
    }
}
