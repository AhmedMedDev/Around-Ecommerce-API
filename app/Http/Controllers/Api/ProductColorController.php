<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductColor\StoreProductColorRequest;
use App\Http\Requests\ProductColor\UpdateProductColorRequest;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProductColorController extends Controller
{
    /**
     * Create a new ProductColorController instance.
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
        $productcolors = Cache::rememberForever('product_colors', 
        fn() => DB::table('product_colors')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $productcolors
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
    public function store(StoreProductColorRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        /* Turn request into Associative Array */

        $editedRequest = [[]];

        for ($i = 0; $i < count($request['color_id']); $i++) 
        { 
            $editedRequest[$i]['product_id'] = $request['product_id'];
            
            $editedRequest[$i]['color_id'] = $request['color_id'][$i];
        }

        /* Turn request into Associative Array */

        ProductColor::insert( $editedRequest );

        $productcolor = ProductColor::orderByDesc('id')
        ->limit(count($request['color_id']))
        ->get();


        return response()->json([
            'success' => true,
            'payload' => $productcolor
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
    public function show(ProductColor $productcolor) // Secured Endpoint
    {
        return response()->json([
            'success' => true,
            'payload' => $productcolor
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
    public function update(UpdateProductColorRequest $request, ProductColor $productcolor) // Secured Endpoint
    {
        $request = $request->validated();

        $productcolor = $productcolor->update( $request );

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
    public function destroy(ProductColor $productcolor) // Secured Endpoint
    {
        $productcolor = $productcolor->delete( $productcolor );

        if ($productcolor) return response()->json([
            'success' => true,
        ]);
    }
}
