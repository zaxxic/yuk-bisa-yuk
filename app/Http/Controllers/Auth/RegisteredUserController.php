<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required|min:4',
                'gambar'=>'required|image|mimes:jpeg,png,jpg,svg',
                'logo'=>'required|image|mimes:jpeg,jpg,png',
                'kode_pos'=>'required|min:5|max:8',
                'koordinat'=>'required'
            ],[
                'name.required'=>'Nama harus di isi',
                'password.required'=>'Password harus di isi',
                'password.min'=>'Password minimal 4 huruf',
                'kode_pos.min'=>'Kode pos minimal 5 angka',
                'kode_pos.max'=>'Kode pos minimal 8 angka',
                'email.unique'=>'Email ada yang sama',
                'gambar.mimes'=>'Gambar harus dalam bentuk jpeg,png,jpg,svg',
                'gambar.image'=>'Yang di inputkan harus gambar',
                'logo.mimes'=>'Gambar harus dalam bentuk jpeg,png,jpg,svg',
                'logo.image'=>'Yang di inputkan harus gambar',
                
            ]

        );

        // dd('bb');
        
        $gambar = Storage::disk('public')->put('gpersetujuan', $request->file('gambar'));
        $logo = Storage::disk('public')->put('glogo', $request->file('logo'));

        $user = User::create([
            
        
            'name' => $request->name,
            'email' => $request->email,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'gambar' => $gambar,
            'logo' => $logo,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'koordinat' => $request->koordinat,
            'password' => Hash::make($request->password),
            
        ]);
        
        
        



        return redirect('login')->with('status', 'Email atau Password salah');
    }
}
