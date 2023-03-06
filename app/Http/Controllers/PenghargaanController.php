<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\desa_award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenghargaanController extends Controller
{
    public function penghargaan()
    {
        $data = desa_award::where('user_id',Auth::user()->id)->paginate(2);
        return view('admindesa.penghargaan', ['data' => $data]);
    }

    public function tambahpenghargaan()
    {
        return view('admindesa.tambah_penghargaan');
    }


    public function uploadpenghargaan(Request $request)
    {
        $files = [];
        if ($request->hasfile('gambar')) {
            foreach ($request->gambar as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('imgpenghargaan/'), $name);
                $files[] = $name;
            }
        }
        // $fotoside = implode(',',$files);
        $model  = new desa_award();
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
        alert()->success('Sukses','Penghargaan berhasil di tambahakan');
        return redirect('penghargaan')->with('success', 'Images uploaded successfully.');
    }
    public function editpeng($id)
    {
        $data = desa_award::findorfail($id);
        return view('admindesa.tampil_penghargaan', compact('data'));
    }
    public function editpenghargaan(Request $request, $id)
    {
        $data = desa_award::findOrfail($id);
        $data->update([
            "judul" => $request->judul,
            "subjudul" => $request->subjudul,
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
                $file->move(public_path('/public/imgppenghargaan/'), $name);
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
        alert()->success('Sukses','penghargaan berhasil di edit');
        return redirect('penghargaan')->with('success', 'Images Update Successfully');
    }
    public function deletepenghargaan($id)
    {
        $data = desa_award::find($id);
        $data->delete();
        return redirect('penghargaan');
    }
}
