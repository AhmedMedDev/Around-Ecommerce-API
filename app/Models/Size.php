<?php

namespace App\Models;

use App\Observers\SizeObserver;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_size',
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

        Size::observe(SizeObserver::class);
    }
}
