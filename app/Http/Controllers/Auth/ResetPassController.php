<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

/* Models */
use App\User;
use App\Models\ResetPassword;

/* Requests */
use App\Http\Requests\ResetPassword\CreatepreResetPasswordRequest;
use App\Http\Requests\ResetPassword\CreateConfirmPINRequest;
use App\Http\Requests\ResetPassword\CreateResetPasswordRequest;

/* Mails */
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordEmail;


class ResetPassController extends Controller
{

    public function preResetPassword(CreatepreResetPasswordRequest $request)
    {
        
        $user = User::where('email',$request->email)->first();

        if(!$user){
            return response()->json(
                ['error' => 'This is an email not found'],
                401
            );
        }

        //Create a secret key
        $pin = rand(100000, 999999);

        //Save pin in DB
        $resetPassword = ResetPassword::create( [
            'id' => $user->id,
            'pin' => $pin
        ]);
        
        //send secret key to the user's email
        Mail::to($user)->send(new ResetPasswordEmail($resetPassword));
        
        //201 response
        return response()->json(
            ['message' => 'Check your email'],
            201
        );

    }

    public function confirmPIN(CreateConfirmPINRequest $request)
    {
        $ResetPassword = ResetPassword::where('pin',$request->pin)->first();

        if(!$ResetPassword){
            return response()->json(
                 ['error' => 'Wrong'],
                 401
             );
         }

        //201 response
        return response()->json(
            ['message' => 'Done'],
            201
        );

    }

    public function resetPassword(CreateResetPasswordRequest $request)
    {
        $ResetPassword = ResetPassword::where('pin',$request->pin)->first();

        if(!$ResetPassword){
            return response()->json(
                 ['error' => 'Wrong'],
                 401
             );
         }

        // upadte user's password
        $id = $ResetPassword->id;

        $newPassword = Hash::make($request->password);

        User::where('id', $id)->update(['password' => $newPassword]);

        // Delete sec key from DB
        //ResetPassword::where('id',$id)->delete();
        DB::table('resetPasswords')->where('id', $id)->delete();

        //201 response
        return response()->json(
            ['message' => 'Password changed'],
            201
        );
    }



}
