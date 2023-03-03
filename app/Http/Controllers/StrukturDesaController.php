<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\lembaga_structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

class StrukturDesaController extends Controller
{
    public function strukturdesa()
    {
        // $data = lembaga_structure::first();
        $data=lembaga_structure::first();
        return view('admindesa.struktur_desa', compact('data'));
    }
    public function updatestrukturdesa(Request $request)
    {
        $data = lembaga_structure::first();
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambarstrukturdesa/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->user_id = Auth::user()->id;
            $data->save();
        }
        $data->save();
        return redirect()->back();
    }
}