<?php

namespace App\Http\Controllers;

use App\Models\kt_structure;
use App\Models\lembaga_structure;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationMail;
use App\Mail\kirimEmail;
use App\Models\desa_profile;
use App\Models\pkk_structure;
use App\Models\resident;
use App\Models\User;
use App\Models\webprofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataAdminController extends Controller
{  
    public function DataAdmin()
    {
          $pending = User::where('status', 'pending')->paginate(2);
        $pending1 = User::where('status', 'aktif')->paginate(2);

      
        // $table->string('nama');
        // $table->string('jk');
        // $table->string('agama');
        // $table->date('tanggal');
        // $table->string('alamat');
        // $table->string('pendidikan');
        // $table->string('status');


        
        return view ('webadmin.data_admin',['data'=>$pending,'data2'=>$pending1 ]);


    }

    public function deleteadmin($id){
        $data = User::Find($id)->delete();
        return redirect('dataadmin');
    }

    public function updateStatus($id)
{
    $data = User::find($id);

    if ($data->status == 'pending') {
        $data->status = 'aktif';

        Mail::to($data->email)->send(new kirimEmail());
        $user = desa_profile::create([
            'user_id' => $id,
            'gambar1' => 'desacontoh123.jpg',
            'gambar2' => 'desacontoh123.jpg',
            'gambar3' => 'desacontoh123.jpg',
            'sejarah' => 'buat sejarah desa dan ini adalah contoh sejarah desa',
            'visi' => 'ini adalah visi desa',
            'misi' => 'ini adalah misi desa',
            'batasutara' => 'contoh',
            'batasselatan' => 'contoh',
            'batastimur' => 'contoh',
            'batasbarat' => 'contoh',
        ]);

        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = lembaga_structure::create([
            'user_id' => $id,
            'gambar' => 'struktur.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);


    }

    $data->save();

    return redirect()->back();
}




public function show($id)
{
    $user = User::find($id);
    return view('webadmin.lihat_desa',['data'=>$user]);
}


   
}
