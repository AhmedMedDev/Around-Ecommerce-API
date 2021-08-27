<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImage\StoreProductImageRequest;
use App\Http\Requests\ProductImage\UpdateProductImageRequest;
use App\Models\ProductImage;
use App\Traits\ImgUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Images upload traits 
    |--------------------------------------------------------------------------
    |
    | This Trait to save img in PC
    |
    */

    use ImgUpload;

    /**
     * Create a new ProductImageController instance.
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
    public function index()  // Secured Endpoint
    {
        $products = Cache::rememberForever('product_images', 
        fn() => DB::table('product_images')->get());
        
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
     * 
     * For Admin Only
     * 
     */
    public function store(StoreProductImageRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        /* Turn request into Associative Array */

        $editedRequest = [[]];

        for ($i = 0; $i < count($request['pro_img']); $i++) 
        { 
            // $fileName = $this->saveImage($request['pro_img'][$i], 'uploads/products/images/$request['product_id']');

            // $request['pro_img'][$i] = "uploads/products/images/$request['product_id']/$fileName";

            $editedRequest[$i]['product_id'] = $request['product_id'];
            
            $editedRequest[$i]['pro_img'] = $request['pro_img'][$i];
        }

        /* Turn request into Associative Array */
        
        $productImage = ProductImage::insert( $editedRequest );

        $productImage = ProductImage::orderByDesc('id')
        ->limit(count($request['pro_img']))
        ->get();

        return response()->json([
            'success' => true,
            'payload' => $productImage
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductImage $productImage
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     * 
     */
    public function show(ProductImage $productImage) // Secured Endpoint
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
     * @param  ProductImage $productImage
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage) // Secured Endpoint
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
     * @param  ProductImage $productImage
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     * 
     */
    public function destroy(ProductImage $productImage) // Secured Endpoint
    {
        $productImage = $productImage->delete( $productImage );

        if ($productImage) return response()->json([
            'success' => true,
        ]);
    }
}
