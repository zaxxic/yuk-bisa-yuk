<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pkk_structure;
use App\Models\lembaga_structure;
use App\Models\kt_structure;
use App\Models\desa_rule;
use App\Models\desa_new;
use App\Models\Product;
use App\Models\resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlah_pkk = pkk_structure::all()->count();
        $jumlah_struktur = lembaga_structure::all()->count();
        $jumlah_kt = kt_structure::all()->count();
        $jumlah_peraturan = desa_rule::all()->count();
        $jumlah_berita = desa_new::all()->count();
        $jumlah_product = Product::all()->count();
        $jumlah_penduduk = resident::all()->count();
        return view('admindesa.dashboard')->with('jumlah_pkk', $jumlah_pkk) ->with ('jumlah_struktur',$jumlah_struktur) ->with ('jumlah_kt', $jumlah_kt) -> with ('jumlah_peraturan',$jumlah_peraturan) ->with ('jumlah_berita', $jumlah_berita) ->with ('jumlah_product', $jumlah_product) -> with('jumlah_penduduk', $jumlah_penduduk);
    }
}
