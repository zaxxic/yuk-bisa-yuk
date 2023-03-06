<?php

namespace App\Http\Controllers;

use App\Models\desa_rule;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeraturanController extends Controller
{
    public function peraturan()
    {
        // $data = desa_rule::latest()->paginate(3);
        $data = desa_rule::where('user_id',Auth::user()->id)->paginate(8);
        return view('admindesa.peraturan', compact('data'));
    }
    public function tambahperaturan(){
        return view('admindesa.tambah-peraturan');
    }

    public function insertperaturan(Request $request){

        $data=desa_rule::create($request -> all());
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Peraturan berhasil di tambahakan');
        return redirect('peraturan');
    }
    public function tampilperaturan($id){
        $data = desa_rule::find($id);
        return view('admindesa.tampil-peraturan', compact('data'));
    }
    public function updateperaturan(Request $request, $id){
        $data = desa_rule::find($id);
        $data -> update($request -> all());
        alert()->success('Sukses','Peraturan berhasil di edit');
        return redirect('peraturan');
    }
    public function deleteperaturan($id){
        $data = desa_rule::find($id);
        $data -> delete();
        return redirect('peraturan');
    }

}

