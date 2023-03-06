<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\pkk_structure;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StrukturPKKController extends Controller
{
    public function strukturpkk()
    {
        $jabatan = Jabatan::all();
        $data = pkk_structure::where('user_id',Auth::user()->id)->paginate(8);
        // dd($data);
        return view('admindesa.struktur_pkk', compact('data', 'jabatan'));
    }
    public function tambahpkk(){
        $id = 5;
        $jabatan = Jabatan::find($id);
        $data = pkk_structure::all();
        return view('admindesa.tambah-pkk', compact('data', 'jabatan'));
    }
    public function insertpkk(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048'
        ]);

        $nama = $request->nama;
        $gambar = Storage::disk('public')->put('gambarpkk', $request->file('gambar'));

        $data= pkk_structure::create([
            'id_jabatan' => $request->id_jabatan,
            'nama' => $nama,
            'gambar' => $gambar,
        ]);
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahkan');
        return redirect('struktur_pkk');
    }
    public function tampilpkk($id){
        $data = pkk_structure::find($id);
        return view('admindesa.tampil-pkk', compact('data'));
    }
    public function updatepkk(Request $request, $id){
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
        ],
        ['gambar.mimes'=>'format harus jpeg,png,jpg,webp']);
        $data = pkk_structure::find($id);

        $gambar = Storage::disk('public')->put('gambarpkk', $request->file('gambar'));
        $data->update([
            'nama' => $request->nama,
            'gambar' => $gambar,
        ]);
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('struktur_pkk');
    }
    public function deletepkk($id){
        $jabatan = Jabatan::find($id);
        $data = pkk_structure::find($id);
        $data -> delete();
        return redirect('struktur_pkk');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = pkk_structure::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(8);
        return view('admindesa.struktur_pkk', compact('data'));
    }
}
