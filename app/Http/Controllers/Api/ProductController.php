<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index','show','productImages','reviews']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->paginate(5);
        
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
    public function store(StoreProductRequest $request)
    {
        $request = $request->validated();

        $category = Product::create( $request );

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
    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'payload' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request = $request->validated();

        $product = $product->update( $request );

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
    public function destroy(Product $product)
    {
        $product = $product->delete( $product );

        if ($product) return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Get List of Product's Images
     * 
     * @param Product
     */
    public function productImages(Product $product)
    {
        $productImages = DB::table('products')
        ->join('product_images','products.id','product_images.product_id')
        ->where('product_images.product_id',$product->id)
        ->paginate(5);

        return response()->json([
            'success' => true,
            'payload' => $productImages
        ]);
    }

    /**
     * Get List of Product's reviews
     * 
     * @param Product
     */
    public function reviews(Product $product)
    {
        $productReviews = DB::table('products')
        ->join('reviews','products.id','reviews.product_id')
        ->where('reviews.product_id',$product->id)
        ->paginate(5);

        return response()->json([
            'success' => true,
            'payload' => $productReviews
        ]);
    }
}
