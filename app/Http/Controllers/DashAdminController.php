<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\webprofile;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{

    
    public function dashadmin()
    {
        $jumlah_pending = webprofile::all()->count();
        $jumlah_data = User::all()->count();
       
        return view ('webadmin.dashboard') ->with('jumlah_data', $jumlah_data) -> with ('jumlah_pending', $jumlah_pending);
    }
}