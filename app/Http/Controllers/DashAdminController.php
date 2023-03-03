<?php

namespace App\Http\Controllers;

use App\Models\webprofile;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{

    
    public function dashadmin()
    {
        $data=webprofile::all();
       
        return view ('webadmin.dashboard',['data1'=>$data]);
    }
}
