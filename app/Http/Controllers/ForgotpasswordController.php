<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    //
    public function forgotpw()
    {
        return view('forgotpassword');
    }
}
