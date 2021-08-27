<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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
        $orders = Cache::rememberForever('orders', 
        fn() => DB::table('orders')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $orders
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
    public function store(OrderRequest $request)
    {
        $request = $request->validated();

        $request['user_id'] = Auth::user()->id;

        $order = Order::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Order $order
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function show(Order $order)
    {
        return response()->json([
            'success' => true,
            'payload' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Order $order
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $request = $request->validated();

        $order = $order->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Order $order
     * @return \Illuminate\Http\Response
     * 
     * for admin only 
     * 
     */
    public function destroy(Order $order)
    {
        $order = $order->delete( $order );

        if ($order) return response()->json([
            'success' => true,
        ]);
    }
}
