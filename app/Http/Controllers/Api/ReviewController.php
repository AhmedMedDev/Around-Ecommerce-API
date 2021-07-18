<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreReviewRequest;
use App\Http\Requests\Review\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user 
     */
    public function index() // Secured Endpoint 
    {
        $reviews = DB::table('reviews')->paginate(5);
        
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

        $review = Review::create( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Review $review
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
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
        if ($review->user_id != Auth::user()->id ) 
        {
            return response()->json([
                'message' => "Unauthenticated, this action for specific user only",
            ],401);
        }

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
        if ($review->user_id != Auth::user()->id ) 
        {
            return response()->json([
                'message' => "Unauthenticated, this action for specific user only",
            ],401);
        }

        $review = $review->delete( $review );

        if ($review) return response()->json([
            'success' => true,
        ]);
    }
}
