<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreReviewRequest;
use App\Http\Requests\Review\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{
    /**
     * Create a new ProductSizeController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            ['auth:api'],
            ['except' => ['index','show','indexWithUser']]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     */
    public function index() // Secured Endpoint 
    {
        $reviews = Cache::rememberForever('reviews', 
        fn() => DB::table('reviews')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $reviews
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
     */
    public function store(StoreReviewRequest $request) // Secured Endpoint 
    {
        $request = $request->validated();

        $request['user_id'] = Auth::user()->id;

        $review = Review::create( $request );

        return response()->json([
            'success' => true,
            'payload' => $review
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Review $review
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     */
    public function show(Review $review) // Secured Endpoint 
    {
        return response()->json([
            'success' => true,
            'payload' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Review $review
     * @return \Illuminate\Http\Response
     * 
     * For Specific User , who created this rec
     * 
     */
    public function update(UpdateReviewRequest $request, Review $review) // Secured Endpoint 
    {
        Gate::authorize('update',$review);

        $request = $request->validated();

        $review = $review->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Review $review
     * @return \Illuminate\Http\Response
     * 
     * For Specific User , who created this rec
     * 
     */
    public function destroy(Review $review) // Secured Endpoint 
    {
        Gate::authorize('delete',$review);

        $review = $review->delete( $review );

        if ($review) return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * X X Roles
     */
    public function indexWithUser() // Secured Endpoint 
    {
        $reviews = Cache::rememberForever('reviewsWihUsers', 
        fn() => DB::table('users')
        ->join('reviews','users.id', 'reviews.user_id')
        ->select('reviews.id', 're_des', 're_rate', 'product_id', 'Fname', 'img')
        ->get());

        return response()->json([
            'success' => true,
            'payload' => $reviews
        ]);
    }

}
