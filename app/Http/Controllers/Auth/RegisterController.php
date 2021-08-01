<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Mail\VerifyEmail;
use App\Traits\ImgUpload;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class RegisterController extends Controller
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

    public function register(CreateUserRequest $request)
    {
        $request = $request->validated();

        if (isset($request['img']))
        {
            $fileName = $this->saveImage($request['img'], 'uploads/users/img');

            $request['img'] = "uploads/users/img/$fileName";
        }

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
