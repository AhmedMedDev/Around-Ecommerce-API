<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\StoreOfferRequest;
use App\Http\Requests\Offer\UpdateOfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Create a new OfferController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            ['auth:api','admin'],
            ['except' => ['index','show']]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     * 
     */
    public function index() // Secured Endpoint
    {
        $offers = Cache::rememberForever('offers', 
        fn() => DB::table('offers')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $offers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function store(StoreOfferRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        $offer = Offer::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $offer
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Offer $offer
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     * 
     */
    public function show(Offer $offer) // Secured Endpoint
    {
        return response()->json([
            'success' => true,
            'payload' => $offer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Offer $offer
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function update(UpdateOfferRequest $request, Offer $offer) // Secured Endpoint
    {
        $request = $request->validated();

        $offer = $offer->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Offer $offer
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function destroy(Offer $offer) // Secured Endpoint
    {
        $offer = $offer->delete( $offer );

        if ($offer) return response()->json([
            'success' => true,
        ]);
    }
}
