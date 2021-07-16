<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreCartRequest;
use App\Http\Requests\Cart\UpdateCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')->paginate(5);
        
        return response()->json([
            'success' => true,
            'payload' => $carts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $request = $request->validated();

        $cart = Cart::create( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return response()->json([
            'success' => true,
            'payload' => $cart
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        $request = $request->validated();

        $cart = $cart->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart = $cart->delete( $cart );

        if ($cart) return response()->json([
            'success' => true,
        ]);
    }
}
