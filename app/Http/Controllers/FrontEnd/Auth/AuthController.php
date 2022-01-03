<?php

namespace App\Http\Controllers\FrontEnd\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(!Auth::attempt(['email' =>$request->email , 'password' => $request->password])){
            return response()->json('unauthrized',401);
        }else{
            $user = $request->user();
            $token  = $user->createToken('Personal Access Token ');
            return response($token, 200);
        }
    }

    public function logout(Request $request)
    {
         $request->user()->token()->revoke();
         return response('logout scussss', 200);

    }
    public function register(Request $request)
    {
        # code...
    }

    public function me()
    {
        return response(request()->user(), 200);

    }
}
