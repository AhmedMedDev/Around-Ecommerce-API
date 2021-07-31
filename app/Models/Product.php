<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\ProductObserver;


class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_name',
        'pro_des',
        'price',
        'mainImage',
        'category_id',
        'pro_rate',
        'pro_gender',
        'favHeader',
        'trending',
        'defaultSize_id',
        'defaultColor_id',
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

        Product::observe(ProductObserver::class);
    }
}
