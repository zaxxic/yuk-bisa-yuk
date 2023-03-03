<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\galery;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function galeri()
    {
        $data = gallery::where('user_id',Auth::user()->id)->get();
        
        return view('admindesa.galeri', ['data' => $data]);
    }

    public function tambahgaleri()
    {
        return view('admindesa.tambah_galeri');
    }


    public function upload(Request $request)
    {
        $files = [];
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('imggaleri'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new gallery();
        $model->judul = $request->judul;
        $model->tanggal = $request->tanggal;
        $model->gambar = json_encode($files);
        $model->user_id = Auth::user()->id;
        $model->save();
        $this->validate(
            $request,
            [
                'gambar' => 'required',
                'judul' => 'required',
                'tanggal' => 'required'

            ]
        );

        return redirect('galeri')->with('success', 'Images uploaded successfully.');
    }

    public function tampil($id)
    {
        $data = gallery::findorfail($id);
        return view('admindesa.tampil_galeri', compact('data'));
    }

    public function tampilgaleri(Request $request, $id)
    {

        $data = gallery::findOrfail($id);
        $data->update([
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,
        ]);


        if ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/public/imggaleri/'), $name);
                $gambar[$keyarray1[$i]] = $name;
                $i++;
            }
            $fotoin = json_decode($data->gambar);
            // dd($foto);
            foreach ($keyarray1 as $key) {
                $fotoin[$key] = $gambar[$key];
            }
            $data->gambar = $fotoin;
            $data->save();
        }
        $data->update();
        return redirect('galeri')->with('success', 'Images Update Successfully');
    }
    public function deletegaleri($id)
    {
        $data = gallery::find($id);
        $data->delete();
        return redirect('galeri');
    }
}
