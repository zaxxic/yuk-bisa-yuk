<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerWebAdmin extends Controller
{
    public function WebAdmin(){
        return view('webadmin/dashboard');
    }
}
