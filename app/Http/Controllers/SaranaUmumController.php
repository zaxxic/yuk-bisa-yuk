<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\public_facility;
use Illuminate\Http\Request;

class SaranaUmumController extends Controller
{
    public function sarana()
    {
        $data=public_facility::first();
        return view('admindesa.sarana_umum', compact('data'));
    }
    public function updatesarana(Request $request, $id)
    {

        $data=public_facility::find($id);
        $data->update([
            'rw'=>$request->rw,
            'rt'=>$request->rt,
            'paud'=>$request->paud,
            'tk'=>$request->tk,
            'sd'=>$request->sd,
            'smp'=>$request->smp,
            'sma'=>$request->sma,
            'rumah'=>$request->rumah,
            'puskesmas'=>$request->puskesmas,
            'kesehatan'=>$request->kesehatan,
            'posyandu'=>$request->posyandu,
            'kb'=>$request->kb,
            'dokter'=>$request->dokter,
            'bidan'=>$request->bidan,
        ]);
        alert()->success('Sukses','Data berhasil di edit');
        return redirect()->back();
    }
}
