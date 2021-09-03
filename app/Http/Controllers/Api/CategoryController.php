<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Traits\ImgUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
     * Create a new OfferController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            ['auth:api','admin'],
            ['except' => ['index','show','cheapestProduct']]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Cache::rememberForever('categories', 
        fn() => DB::table('categories')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $request = $request->validated();

        $fileName = $this->saveImage($request['cat_img'], 'uploads/categories/img');

        $request['cat_img'] = "uploads/categories/img/$fileName";

        $category = Category::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $category
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return response()->json([
            'success' => true,
            'payload' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request = $request->validated();

        if (isset($request['cat_img']))
        {
            \File::delete(public_path($category->cat_img));

            $fileName = $this->saveImage($request['cat_img'], 'uploads/categories/img');

            $request['cat_img'] = "uploads/categories/img/$fileName";
        }

        $category = $category->update( $request );

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
    public function destroy(Category $category)
    {
        $category = $category->delete( $category );

        if ($category) return response()->json([
            'success' => true,
        ]);
    }

    /**
     * cheapest Product 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cheapestProduct()
    {
        //  $sql = "SELECT categories.id as cat_id, cat_name, cat_img, MIN(price) as cheapestProduct 
        //          FROM products 
        //          JOIN categories ON categories.id=products.category_id 
        //          GROUP BY products.category_id";

         $cheapestProduct = DB::table('products')
         ->select('categories.id as cat_id', 'cat_name', 'cat_img', DB::raw('min(price) as cheapestProduct'))
         ->join('categories','categories.id', 'products.category_id')
         ->groupBy('categories.id')
         ->get();

        return response()->json([
            'success' => true,
            'payload' => $cheapestProduct
        ]);
    }
}
