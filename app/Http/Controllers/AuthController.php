<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Mail\VerifyEmail;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register','verify']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(CreateUserRequest $request)
    {
        $request['verify_code'] = Str::random(50);

        $request['password'] = Hash::make($request->password);
        
        $user = User::create( $request->all() ); 

        //send mail to verify
        Mail::to($user)->send(new VerifyEmail($user));

        //201 response
        return response()->json(
            ['message' => 'Check your email'],
            201
        );

    }

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

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
