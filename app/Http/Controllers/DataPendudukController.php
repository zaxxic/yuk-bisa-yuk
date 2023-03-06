<?php

namespace App\Http\Controllers;

use App\Models\resident;
use Illuminate\Http\Request;

use App\Exports\DataPendudukExport;
use App\Http\Controllers\Controller;
use App\Imports\DataPendudukImport;
use Illuminate\Support\Facades\Auth;

use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

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

    public function exportexcel(){
        return Excel::download(new DataPendudukExport,'dataPenduduk.xlsx');
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('data_penduduk',$namafile);

        Excel::import(new DataPendudukImport,\public_path('/data_penduduk/'.$namafile));
        return redirect('data_penduduk');
    }
}
