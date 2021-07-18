<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImage\StoreProductImageRequest;
use App\Http\Requests\ProductImage\UpdateProductImageRequest;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('product_images')->paginate(5);
        
        return response()->json([
            'success' => true,
            'payload' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductImageRequest $request)
    {
        $request = $request->validated();

        /* Turn request into Associative Array */

        $editedRequest = [[]];

        for ($i = 0; $i < count($request['pro_img']); $i++) 
        { 
            $editedRequest[$i]['product_id'] = $request['product_id'];
            $editedRequest[$i]['pro_img'] = $request['pro_img'][$i];
        }

        /* Turn request into Associative Array */
        
        $productImage = ProductImage::insert( $editedRequest );

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
    public function show(ProductImage $productImage)
    {
        return response()->json([
            'success' => true,
            'payload' => $productImage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage)
    {
        $request = $request->validated();

        $productImage = $productImage->update( $request );

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
    public function destroy(ProductImage $productImage)
    {
        $productImage = $productImage->delete( $productImage );

        if ($productImage) return response()->json([
            'success' => true,
        ]);
    }
}
