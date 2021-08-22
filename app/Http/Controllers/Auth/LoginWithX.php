<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class LoginWithX extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Rrgister a new user 
     *
     * @return \Illuminate\Http\Response
     */
    public function register ($user)
    {
        $name = Str::of($user->name)->explode(' ');
    
        $contents = file_get_contents($user->avatar);

        $filename = time().'.jpeg';

        Storage::put("public/users/img/$filename", $contents);
        
        $storeUser = DB::table('users')->insert([
            'Fname' => $name[0],
            'Lname' => $name[1],
            'email' => $user->email,
            'img' => "storage/users/img/$filename",
            'password' => Hash::make("password"),
            'verify_code' => Str::random(50)
        ]);

        return $storeUser;
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
         
        if (!DB::table('users')->where('email', $user->email)->count())
        {
            $this->register($user);
        }

        $token = Auth::attempt([
            'email' => $user->email,
            'password' => 'password',
        ]);

        return response()->json([
            'access_token'  => $token,
            'token_type'    => 'bearer',
            'user'          => Auth::user(),
            'expires_in'    => Auth::factory()->getTTL() * 60
        ]);;
    }
}