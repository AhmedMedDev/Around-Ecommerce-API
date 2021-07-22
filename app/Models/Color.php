<?php

namespace App\Models;

use App\Observers\ColorObserver;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_color',
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

        Color::observe(ColorObserver::class);
    }
}
