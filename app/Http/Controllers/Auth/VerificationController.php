<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify($verify_code)
    {
        $user = User::where('verify_code',$verify_code)->first();

        if( $user->email_verified_at == null ):

            //Update User  ** should return view 
            User::where('id', $user->id)->update([
                'email_verified_at' => now()
            ]);

            //201 response ** should return view 
            return response()->json(
                ['message' => 'Your account has been verified'],
                201
            );

        else:

            //Error response ** should return view 
            return response()->json(
                ['error' => "User Has Verified Before"],
                405
            );

        endif; 
    }
}
