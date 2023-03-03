<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PariwisataController extends Controller
{
    public function pariwisata()
    {
        $data = tour::where('user_id',Auth::user()->id)->paginate(2);
        return view('admindesa.pariwisata', ['data' => $data]);
    }

    public function tambahpariwisata()
    {
        return view('admindesa.tambah_pariwisata');
    }


    public function uploadpariwisata(Request $request)
    {
        $files = [];
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('imgpariwisata/'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new tour();
        $model->judul = $request->judul;
        $model->subjudul = $request->subjudul;
        $model->tanggal = $request->tanggal;
        $model->koordinat = $request->koordinat;
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
        
        return redirect('pariwisata')->with('success', 'Images uploaded successfully.');
    }
    public function editpar($id)
    {
        $data = tour::findorfail($id);
        return view('admindesa.tampil_pariwisata', compact('data'));
    }
    public function editpariwisata(Request $request, $id)
    {

        $data = tour::findOrfail($id);
        $data->update([
            "judul" => $request->judul,
            "subjudul" => $request->subjudul,
            "koordinat" => $request->koordinat,
            "tanggal" => $request->tanggal,
            "isi" => $request->isi,
        ]);


        if ($request->hasfile('gambar')) {
            $keyarray1 =  array_keys($request->gambar);
            $gambar = [];
            // $hasil = array_combine($tes,$foto);
            $i = 0;
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/public/imgpariwisata/'), $name);
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
        return redirect('pariwisata')->with('success', 'Images Update Successfully');
    }
    public function deletepariwisata($id)
    {
        $data = tour::find($id);
        $data->delete();
        return redirect('pariwisata');
    }
}
