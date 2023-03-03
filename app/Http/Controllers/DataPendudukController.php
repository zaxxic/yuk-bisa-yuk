<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\resident;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPendudukController extends Controller
{
    public function datapenduduk()
    {
        $data = resident::where('user_id',Auth::user()->id)->paginate(10);
        return view('admindesa.data_penduduk', compact('data'));
    }
    public function tambahpenduduk(){
        return view('admindesa.tambah-penduduk');
    }


    public function insertpenduduk (Request $request){
        $data = resident::create($request -> all());
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahakan');
        return redirect('data_penduduk');
    }


    public function tampilpenduduk ($id){
        $data = resident::find($id);
        return view('admindesa.tampil-penduduk', compact('data'));
    }
    public function updatependuduk(Request $request, $id){
        $data = resident::find($id);
        $data -> update($request -> all());
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('data_penduduk');
    }
    public function deletependuduk($id){
        $data = resident::find($id);
        $data -> delete();
        return redirect('data_penduduk');
    }
    public function searchh(Request $request)
    {
        $keyword = $request->searchh;
        $data = resident::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        return view('admindesa.data_penduduk', compact('data'));
    }
}
