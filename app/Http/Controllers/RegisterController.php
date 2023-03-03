<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpan(Request $request)
{

   $validateData = $request->validate([

        'name'=>'required|max:200|min:4|unique:users',
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:4|max:200'
    ]);

    $kredensial=$validateData['password'] = bcrypt($validateData['password']);

//  return $request->all(); 
User::create($validateData);

return redirect('/login'); 
}

    public function store(Request $request)
{

   $validateData = $request->validate([

        'username'=>'required|max:200|min:4|unique:users',
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:4|max:200',
        'gambar'=>'required|min:4|max:200',
        'propinsi'=>'required|min:4|max:200',
        'kabupaten'=>'required|min:4|max:200',
        'kecamatan'=>'required|min:4|max:200',
        'kodepos'=>'required|min:4|max:200',
        'koordinat'=>'required|min:4|max:200'
    ]);

    $kredensial=$validateData['password'] = bcrypt($validateData['password']);

//  return $request->all(); 
User::create($validateData);

return redirect('/'); 
}
    
    // public function actionregister(Request $request)
    // {
    //     $user = User::create([
    //         'email' => $request->email,
    //         'username' => $request->username,
    //         'password' => Hash::make($request->password),
    //         'role' => $request->role,
    //         'active' => 1
    //     ]);

    //     Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
    //     return redirect('register');
    // }
}