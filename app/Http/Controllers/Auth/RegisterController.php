<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Mail\VerifyEmail;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function register(CreateUserRequest $request)
    {
        $request = $request->validated();

        $request['verify_code'] = Str::random(50);

        $request['password'] = Hash::make($request['password']);
        
        $user = User::create( $request ); 

        //send mail to verify
        Mail::to($user)->send(new VerifyEmail($user));

        //201 response
        return response()->json(
            ['message' => 'Check your email'],
            201
        );
    }
}
