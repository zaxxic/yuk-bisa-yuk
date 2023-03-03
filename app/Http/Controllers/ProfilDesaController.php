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
        // dd('aa');
        
        $data=desa_profile::find($id);
        $request->validate([
            'gambar1' => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048',
            'gambar2' => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048',
            'gambar3' => 'nullable|image|mimes:png,jpeg,jpg,webp|max:2048',
        ],['gambar1.mimes'=>'format harus jpeg,png,jpg,webp'],
        ['gambar2.mimes'=>'format harus jpeg,png,jpg,webp'],
        ['gambar3.mimes'=>'format harus jpeg,png,jpg,webp']);

        $data->update([
            'sejarah'=>$request->sejarah,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
            'batasutara'=>$request->batasutara,
            'batasselatan'=>$request->batasselatan,
            'batastimur'=>$request->batastimur,
            'batasbarat'=>$request->batasbarat,
        ]);

        if($request->hasFile('gambar1')){
            $gambar1 = Storage::disk('public')->put('gambarprof', $request->file('gambar1'));
            $data->update([
                'gambar1'=>$gambar1,
            ]);
        }
        if($request->hasFile('gambar2')){
            $gambar2 = Storage::disk('public')->put('gambarprof', $request->file('gambar2'));
            $data->update([
                'gambar2'=>$gambar2,
            ]);
        }
        if($request->hasFile('gambar3')){
            $gambar3 = Storage::disk('public')->put('gambarprof', $request->file('gambar3'));
            $data->update([
                'gambar3'=>$gambar3,
            ]);
        }
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->back();
    }
}
