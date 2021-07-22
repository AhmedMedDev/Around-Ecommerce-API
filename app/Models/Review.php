<?php

namespace App\Models;

use App\Observers\ReviewObserver;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        're_des',
        're_rate',
        'product_id',
        'user_id'
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

        Review::observe(ReviewObserver::class);
    }
}
