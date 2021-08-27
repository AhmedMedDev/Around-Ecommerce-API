<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Size\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    /**
     * Create a new OfferController instance.
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
     */
    public function index()
    {
        $sizes = Cache::rememberForever('sizes', 
        fn() => DB::table('sizes')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $sizes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeRequest $request)
    {
        $request = $request->validated();

        $size = Size::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $size
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return response()->json([
            'success' => true,
            'payload' => $size
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SizeRequest $request, Size $size)
    {
        $request = $request->validated();

        $size = $size->update( $request );

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
    public function destroy(Size $size)
    {
        $size = $size->delete( $size );

        if ($size) return response()->json([
            'success' => true,
        ]);
    }
}
