<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Observers\CartObserver;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'size_id',
        'color_id',
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

        Cart::observe(CartObserver::class);
    }
}
