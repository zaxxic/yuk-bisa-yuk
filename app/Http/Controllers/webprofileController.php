<?php

namespace App\Http\Controllers;

use App\Models\webprofile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class webprofileController extends Controller
{




    public function show($id) {
        $data = webprofile::find($id);
       
        return view('webadmin.websiteprofile', ['data' => $data]);
    }

    // public function dataprofile()
    // {
    //     $data=webprofile::all();
       
    //     return view ('webadmin.navside',['data'=>$data]);
    // }




    public function saveprofile(Request $request)
    {
        $data1 = "";
        if($request->hasFile('gambar1')){
            $request->file('gambar1')->move('img/',$request->file('gambar1')->getClientOriginalName());
            $data=$request->file('gambar1')->getClientOriginalName();
            
        }
        $data2 = "";
        if($request->hasFile('gambar2')){
            $request->file('gambar2')->move('img/',$request->file('gambar2')->getClientOriginalName());
            $data=$request->file('gambar2')->getClientOriginalName();
            
        }
        $data3 = "";
        if($request->hasFile('gambar3')){
            $request->file('gambar3')->move('img/',$request->file('gambar3')->getClientOriginalName());
            $data=$request->file('gambar3')->getClientOriginalName();
            
        }
    
        $user = webprofile::create([
            
            
            'gambar1' => $data1,
            'gambar2' => $data2,
            'gambar3' => $data3
        ]);

        return redirect('profileweb');
    }






}
