<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = DB::table('sizes')->paginate(5);
        
        return response()->json([
            'success' => true,
            'payload' => $sizes
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $request = $request->validated();

        $user = $user->update( $request );

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function changePassword(ChangePasswordRequest $request, User $user)
    {
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
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = $user->delete( $user );

        if ($user) return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart(User $user)
    {
        $usercart = DB::table('products')
        ->join('carts','products.id','carts.product_id')
        ->where('carts.user_id',$user->id)
        ->paginate(5);

        return response()->json([
            'success' => true,
            'payload' => $usercart
        ]);
    }
}
