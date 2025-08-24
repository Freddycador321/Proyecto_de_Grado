<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Spatie\FlareClient\Api;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username','password');
        if(Auth::guard('api')->attempt($credentials)){
            $user = Auth::guard('api')->user();
            $jwt = JWTAuth::attempt($credentials);
            $success = true;
            $data = compact('user','jwt');
            return compact('success','data');
        }
        else
            $success = false;
            $message = 'Credenciales Incorrectas';
            return compact('success','message');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Cuenta o Contraseña incorrecta'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Error de coneccion'], 500);
        }
        if ($token = Auth::guard('api')->attempt($credentials)) {
            // return $this->respondWithToken($token);
        }
        $user = Auth::guard('api')->user();
        $user->token=$token;
        return  response()->json([
            // 'status' => 'ok',
            // 'token' => $token,
            'user' => $user
        ]);
    }
}
