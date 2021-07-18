<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductColor\StoreProductColorRequest;
use App\Http\Requests\ProductColor\UpdateProductColorRequest;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductColorController extends Controller
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
        $productcolors = DB::table('product_colors')->paginate(5);
        
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
     */
    public function store(StoreProductColorRequest $request)
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

        $productcolor = ProductColor::insert( $editedRequest );

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
    public function show(ProductColor $productcolor)
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
     */
    public function update(UpdateProductColorRequest $request, ProductColor $productcolor)
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
     */
    public function destroy(ProductColor $productcolor)
    {
        $productcolor = $productcolor->delete( $productcolor );

        if ($productcolor) return response()->json([
            'success' => true,
        ]);
    }
}
