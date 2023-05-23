<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use HasApiTokens;



class AuthController extends Controller
{
    // use HasApiTokens;
    public function getAllFarmers() {
        $farmer = User::all();
        return response()->json(['Request' =>'Success','data' =>$farmer],200);
    }
    public function register(AuthRequest $request) {
        $farmer = User::farmer($request);
        $token = $farmer->createToken('API Token',['select','create','delete','update'])->plainTextToken;
        return response()->json(['Massage' => 'register successful','data'=> $farmer,'token' => $token],200);
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $farmer = Auth::user();
            $token = $farmer->createToken('API Token',['select','create','delete','update'])->plainTextToken;
            // $token = $farmer->createToken('MyAppToken')->accessToken;
            return response()->json(['Massage' => 'Login Success','data'=> $farmer,'token'=>$token],200);
        }
        return response()->json(['Massage' => 'Invalid credentials'],200);
    }
    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response()->json(['Massage' => 'Logout Success'],200);
    }
}
