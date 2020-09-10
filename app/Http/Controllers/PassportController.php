<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;


class PassportController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'Student_name'=>"required|min:3",
            'Email'=>"required|Email|unique:user",
            'password' =>"required|min:6"
    
        ]);
        $user = User::create([
            'Student_name'=>$request->Student_name,
            'Email'-> $request->Email,
            'password' => bcrypt($request->password),

        ]);
        $token = $user->createToken('Vikku')->accessToken;

        return response()->json(['token' =>$token], 200);

    }
    public function login(Request $request){
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if (auth()->attempt($credentials)){
            $token = auth()->user()->createToken('Vikku')->accessToken;
            return response()->json(['token' =>$token], 200);

        }else{
            return response()->json(['error' =>'Unauthorised User'], 401);

        }
    }
    public function deatils() {
        return response()->json(['user' =>auth()->user()], 200);
    }
}
