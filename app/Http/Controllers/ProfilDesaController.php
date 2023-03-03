<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    public function profildesa()
    {
        $data=desa_profile::first();
        return view('admindesa.profil_desa', compact('data'));
    }
    public function updateprofildesa(Request $request, $id)
    {
        $data=desa_profile::find($id);
        $request->validate([
            'gambar' => 'required|image|mimes:png,jpeg,jpg,webp|max:2048',
        ],['gambar.mimes'=>'format harus jpeg,png,jpg,webp']);
        $gambar1 = Storage::disk('public')->put('gambarprof', $request->file('gambar1'));
        $gambar2 = Storage::disk('public')->put('gambarprof', $request->file('gambar2'));
        $gambar3 = Storage::disk('public')->put('gambarprof', $request->file('gambar3'));
        $data->update([
            'gambar1'=>$gambar1,
            'gambar2'=>$gambar2,
            'gambar3'=>$gambar3,
            'sejarah'=>$request->sejarah,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
            'batasutara'=>$request->batasautara,
            'batasselatan'=>$request->batasselatan,
            'batastimur'=>$request->batastimur,
            'batasbarat'=>$request->batasbarat,
        ]);
        $data->save();
        return redirect()->back();
    }
}
