<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSize\StoreProductSizeRequest;
use App\Http\Requests\ProductSize\UpdateProductSizeRequest;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProductSizeController extends Controller
{
    /**
     * Create a new ProductSizeController instance.
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
        $productsizes = Cache::rememberForever('product_sizes', 
        fn() => DB::table('product_sizes')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $productsizes
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
    public function store(StoreProductSizeRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        /* Turn request into Associative Array */

        $editedRequest = [[]];

        for ($i = 0; $i < count($request['size_id']); $i++) 
        { 
            $editedRequest[$i]['product_id'] = $request['product_id'];

            $editedRequest[$i]['size_id'] = $request['size_id'][$i];
        }

        /* Turn request into Associative Array */

        ProductSize::insert( $editedRequest );

        $productsize = ProductSize::orderByDesc('id')
        ->limit(count($request['size_id']))
        ->get();

        return response()->json([
            'success' => true,
            'payload' => $productsize
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     * 
     */
    public function show(ProductSize $productsize) // Secured Endpoint
    {
        return response()->json([
            'success' => true,
            'payload' => $productsize
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function update(UpdateProductSizeRequest $request, ProductSize $productsize) // Secured Endpoint
    {
        $request = $request->validated();

        $productsize = $productsize->update( $request );

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
     * For Admin Only
     * 
     */
    public function destroy(ProductSize $productsize) // Secured Endpoint
    {
        $productsize = $productsize->delete( $productsize );

        if ($productsize) return response()->json([
            'success' => true,
        ]);
    }
}
