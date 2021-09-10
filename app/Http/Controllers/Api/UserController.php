<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\UserRequest;
use App\Traits\ImgUpload;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
     * Create a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['cart','favorite','show','update','changePassword','destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * For Admin Only
     */
    public function index() // Secured Endpoint 
    {
        $users = Cache::rememberForever('users', 
        fn() => DB::table('users')->get());
        
        return response()->json([
            'success' => true,
            'payload' => $users
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user 
     */
    public function show(User $user) 
    {
        return response()->json([
            'success' => true,
            'payload' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * For Specific User , who created this rec
     */
    public function update(UserRequest $request, User $user) // Secured Endpoint
    {
        Gate::authorize('update',$user);

        $request = $request->validated();

        if (isset($request['img']))
        {
            \File::delete(public_path($user->img));

            $fileName = $this->saveImage($request['img'], 'uploads/users/img');

            $request['img'] = "uploads/users/img/$fileName";
        }

        $user = $user->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Update User's Password in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * For Specific User , who created this rec
     */
    public function changePassword(ChangePasswordRequest $request, User $user) // Secured Endpoint
    {
        Gate::authorize('changePassword',$user);
        
        $request = $request->validated();

        if (!Hash::check($request['old_password'], $user->password)) 
        {
            return response()->json([
                'message'   => "The given data was invalid.",
                "errors"    => [ "old_password" => "The old password is not correct." ]
            ],422);
        }

        $request['password'] = Hash::make($request['password']);
        
        $user = $user->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * For Specific User , who created this rec
     */
    public function destroy(User $user) // Secured Endpoint
    {
        Gate::authorize('delete',$user);

        $user = $user->delete( $user );

        if ($user) return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Get User's Cart
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
     */
    public function cart(User $user) // Secured Endpoint
    {
        Gate::authorize('cart',$user);

        $usercart = DB::table('products')
        ->join('carts','products.id','carts.product_id')
        ->where('carts.user_id',$user->id)
        ->get();

        return response()->json([
            'success' => true, 
            'payload' => $usercart
        ]);
    }

    /**
     * Get User's Favorite
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
     */
    public function favorite(User $user) // Secured Endpoint
    {
        Gate::authorize('favorite',$user);

        $userfavorite = DB::table('products')
        ->join('favorites','products.id','favorites.product_id')
        ->where('favorites.user_id',$user->id)
        ->get();

        return response()->json([
            'success' => true,
            'payload' => $userfavorite
        ]);
    }

    /**
     * Get User's Favorite
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
     */
    public function orders(User $user) // Secured Endpoint
    {
        Gate::authorize('orders',$user);

        $userorders = DB::table('orders')
        ->where('orders.user_id',$user->id)
        ->get();

        return response()->json([
            'success' => true,
            'payload' => $userorders
        ]);
    }

    /**
     * Get User's Favorite
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     * Just For auth user
     */
    public function addresses(User $user) // Secured Endpoint
    {
        Gate::authorize('addresses',$user);
        
        $useraddresses = DB::table('orders')
        ->join('addresses','orders.address_id','addresses.id')
        ->where('orders.user_id',$user->id)
        ->get();

        return response()->json([
            'success' => true,
            'payload' => $useraddresses
        ]);
    }

}
