<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Favorite\FavoriteRequest;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class FavoriteController extends Controller
{
    /**
     * Create a new CartController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['store','update','destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * for Admin only
     * 
     */
    public function index() // Secured Endpoint
    {
        $favorites = Cache::rememberForever('favorites',
        fn() => DB::table('favorites')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $favorites
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * for Auth User
     * 
     */
    public function store(FavoriteRequest $request) // Secured Endpoint
    {
        $request = $request->validated();

        $request['user_id'] = Auth::user()->id;

        $favorite = Favorite::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $favorite
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Favorite $favorite
     * @return \Illuminate\Http\Response
     * 
     * for Admin only
     * 
     */
    public function show(Favorite $favorite) // Secured Endpoint
    {
        return response()->json([
            'success' => true,
            'payload' => $favorite
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Favorite $favorite
     * @return \Illuminate\Http\Response
     * 
     * for specific user, who created this recored 
     * 
     */
    public function update(FavoriteRequest $request, Favorite $favorite) // Secured Endpoint
    {
        Gate::authorize('update',$favorite);
        
        $request = $request->validated();

        $favorite = $favorite->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Favorite $favorite
     * @return \Illuminate\Http\Response
     * 
     * for specific user, who created this recored 
     * 
     */
    public function destroy(Favorite $favorite) // Secured Endpoint
    {
        Gate::authorize('delete',$favorite);

        $favorite = $favorite->delete( $favorite );

        if ($favorite) return response()->json([
            'success' => true,
        ]);
    }
}
