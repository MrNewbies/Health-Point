<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function postFolder(Request $request){
        $folderPath = public_path('/assets/userprofile/' . Auth::user()->id);
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        $userimage = $request->file('formFile');
        $random = Str::random(40) . '.' . $userimage->getClientOriginalExtension();
        $userimage->move($folderPath, $random);

        // $finduser = User::find(Auth::user()->id);
        // $finduser->userimage = $folderPath . $random;
        Auth::user()->userimage = '/assets/userprofile/' . Auth::user()->id . '/' . $random;
        Auth::user()->save();

        return redirect()->back();
    }

}
