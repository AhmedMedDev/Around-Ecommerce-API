<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\StoreCartRequest;
use App\Http\Requests\Cart\UpdateCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class CartController extends Controller
{
    /**
     * Create a new CartController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['store','update','destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     */
    public function index() // Secured Endpoint
    {
        $carts = Cache::rememberForever('carts',
        fn() => DB::table('carts')->get());
        
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
     * 
     *  for Auth user
     */
    public function store(StoreCartRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        $request['user_id'] = Auth::user()->id;

        $cart = Cart::create( $request );

        $product = DB::table('products')
        ->where('id', $cart->product_id)->get();

        foreach($product[0] as $prop => $value ) 
        $cart->$prop = $value;

        return response()->json([
            'success' => true,
            'payload' => $cart
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     */
    public function show(Cart $cart) // Secured Endpoint
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
     * 
     * for specific user, who created this recored 
     * 
     */
    public function update(UpdateCartRequest $request, Cart $cart) // Secured Endpoint
    {
        Gate::authorize('update',$cart);
        
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
     * 
     * for specific user, who created this recored
     * 
     */
    public function destroy(Cart $cart) // Secured Endpoint
    {
        Gate::authorize('delete',$cart);

        $cart = $cart->delete( $cart );

        if ($cart) return response()->json([
            'success' => true,
        ]);
    }
}
