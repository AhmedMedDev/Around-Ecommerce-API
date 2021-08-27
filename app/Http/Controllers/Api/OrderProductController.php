<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderProduct\StoreOrderProductRequest;
use App\Http\Requests\OrderProduct\UpdateOrderProductRequest;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class OrderProductController extends Controller
{
    /**
     * Create a new OrderController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function index()
    {
        $order_products = Cache::rememberForever('order_products', 
        fn() => DB::table('order_products')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $order_products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     *  for Auth user
     * 
     */
    public function store(StoreOrderProductRequest $request)
    {
        $request = $request->validated();

        $order_product = OrderProduct::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $order_product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  OrderProduct $order_product
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function show(OrderProduct $order_product)
    {
        return response()->json([
            'success' => true,
            'payload' => $order_product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  OrderProduct $order_product
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function update(UpdateOrderProductRequest $request, OrderProduct $order_product)
    {
        $request = $request->validated();

        $order_product = $order_product->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  OrderProduct $order_product
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function destroy(OrderProduct $order_product)
    {
        $order_product = $order_product->delete( $order_product );

        if ($order_product) return response()->json([
            'success' => true,
        ]);
    }
}
