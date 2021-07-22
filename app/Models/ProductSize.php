<?php

namespace App\Models;

use App\Observers\ProductSizeObserver;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'product_sizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'size_id',
        'product_id',
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

        ProductSize::observe(ProductSizeObserver::class);
    }
}
