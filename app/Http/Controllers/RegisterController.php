<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    // 'fname' => ['required', 'string', 'max:255'],
    // 'Eaddress' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
    // 'Mnumber' => ['required', 'numeric'],
    // 'pass' => ['required', 'string', 'min:8', 'confirmed'],
    // 'dob' => ['required', 'date'],
    // 'address' => ['required', 'string', 'max:255'],
    // 'gender' => ['required', 'string'],
    public function store(Request $request){

        // $validatedData = $request->validate([
        //     'fname' => 'required',
        //     'Eaddress' => 'required',
        //     'Mnumber' => 'required',
        //     'pass' => 'required',
        //     'dob' => 'required',
        //     'address' => 'required',
        //     'gender' => 'required'
        // ]);

        $request->validate([
            'Eaddress' => 'required|email|unique:users,email',
            // ...Tambahkan aturan validasi lainnya di sini sesuai kebutuhan
        ]);

        // Users::create($validatedData);
        $userData = [
            'username' => $request->input('fname'),
            'email' => $request->input('Eaddress'),
            'usermobile' => $request->input('Mnumber'),
            'userDOB' => $request->input('dob'),
            'useraddress' => $request->input('address'),
            'genderid' => $request->input('gender'), // Pastikan gender sudah ada di database
            'password' => bcrypt($request->input('pass')),
        ];

        // Simpan data ke dalam database
        User::create($userData);

        // Redirect ke halaman login atau halaman lainnya setelah registrasi berhasil
        return redirect('/login');
    }
}
