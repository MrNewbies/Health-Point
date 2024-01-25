<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginpage()
    {
        return view('login');
    }
    // name="exampleInputEmail1"
    // name="exampleInputPassword1"
    public function authenticate(Request $request){
        $credentials = [
            'email' => $request->exampleInputEmail1,
            'password' => $request->exampleInputPassword1
        ];

        // dd($credentials, Auth::attempt($credentials, false));

        if(Auth::attempt($credentials, true)){

            Session::put('asu', $credentials);

            return redirect()->intended('/dashboard');
        }

        return redirect()->route('login');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
