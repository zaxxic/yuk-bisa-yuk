<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\kt_structure;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class StrukturKarangController extends Controller
{
    public function strukturkarang()
    {
        $jabatan = Jabatan::all();
        $data = kt_structure::where('user_id',Auth::user()->id)->paginate(10);
        return view('admindesa.struktur_karang', compact('data', 'jabatan'));
    }
    public function tambahanggota(){
        $id = 5;
        $jabatan = Jabatan::find($id);
        return view('admindesa.tambah-anggota', compact('jabatan'));
    }

    public function insertanggota(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048'
        ]);

        $nama = $request->nama;
        $gambar = Storage::disk('public')->put('gambarkt', $request->file('gambar'));

        $data= kt_structure::create([
            'id_jabatan' => $request->id_jabatan,
            'nama' => $nama,
            'gambar' => $gambar,
        ]);
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahakan');
        return redirect('struktur_karang');
    }


    public function tampilkt($id){
        $data = kt_structure::find($id);
        return view('admindesa.tampil-strukturkt', compact('data'));
    }
    public function updatekt(Request $request, $id){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
        ],
        ['gambar.mimes'=>'format harus jpeg,png,jpg,webp']);
        $data = kt_structure::find($id);

        $gambar = Storage::disk('public')->put('gambarkt', $request->file('gambar'));
        $data->update([
            'nama' => $request->nama,
            'gambar' => $gambar,
        ]);
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('struktur_karang');
    }
    public function deletekt($id){
        $jabatan = Jabatan::find($id);
        $data = kt_structure::find($id);
        $data -> delete();
        return redirect('struktur_karang');
    }
    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $data = kt_structure::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(8);
        return view('admindesa.struktur_karang', compact('data'));
    }
}
