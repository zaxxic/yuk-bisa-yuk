<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function berita()
    {
        $data = desa_new::where('user_id',Auth::user()->id)->paginate(3);
        
        return view('admindesa.berita', ['data' => $data]);
    }

    public function tambahberita()
    {
        return view('admindesa.tambah_berita');
    }


    public function uploadberita(Request $request)
    {
        $files = [];
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('imgberita/'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new desa_new();
        $model->judul = $request->judul;
        $model->subjudul = $request->subjudul;
        $model->tanggal = $request->tanggal;
        $model->isi = $request->isi;
        $model->gambar = json_encode($files);
        $model->user_id = Auth::user()->id;
        $model->save();
        $this->validate(
            $request,
            [
                'judul'     => 'required',
                'subjudul'  => 'required',
            ]
        );
        alert()->success('Sukses','Berita berhasil di tambahakan');
        return redirect('berita')->with('success', 'Images uploaded successfully.');
    }
    public function edit($id)
    {
        $data = desa_new::findorfail($id);
        return view('admindesa.tampil_berita', compact('data'));
    }
    public function editberita(Request $request, $id)
    {
        $data = desa_new::find($id);
        if ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];
            $i = 0;
            foreach ($request->gambar as $data) {
                $name = $data->getClientOriginalName();
                $data->move(public_path('imgberita/'), $name);
                $gambar[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->gambar);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $gambar[$key];
            }
            $data->gambar = $fotoin;
            $data->save();
        }
        $data->update($request->all());
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('berita')->with('success', 'Images Update Successfully');
    }
    public function deleteberita($id)
    {
        $data = desa_new::find($id);
        $data->delete();
        return redirect('berita');
    }
}
