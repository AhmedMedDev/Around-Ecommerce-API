<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\AddressObserver;


class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'compony_name',
        'country',
        'street',
        'apartment',
        'city',
        'postcode',
        'phone',
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

        Address::observe(AddressObserver::class);
    }

}
