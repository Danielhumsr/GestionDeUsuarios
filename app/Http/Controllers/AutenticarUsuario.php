<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;


class AutenticarUsuario extends Controller
{
    public function user(){
        return  $user = Auth::user();
    }
    public function register (Request $request){
        $user = user::create([
            'name'=> $request->input('name'),
            'password' => Hash::make($request->input('password'))
        ]);

    }
    public function login (Request $request){
       if(!Auth::sttempt($request->only('name', 'password'))){
           return response(
               ['mensage'=> 'credenciales invalidas'], Response::HTTP_UNAUTHORIZED);
       }
      
       $user = Auth::user();
       $toke = $user->createToken('token')->plainTextToken;

       $cookie = cookie('jwt', $toke, 60 * 24); 

       return response([
           'mensaje' => 'Ingreso'
       ])->withCookie($cookie);
    }

    public function logout(){
        $cookie = Cookie::forget('jwt');

        return response([
            'mensaje' => 'cerrada sesion correctamente'
        ])->withCookie($cookie);
    } 
}
