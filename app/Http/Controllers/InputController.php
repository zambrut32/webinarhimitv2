<?php

namespace App\Http\Controllers;

use App\CategoryWebinar;
use Illuminate\Http\Request;
use App\Sertifikat;

class InputController extends Controller
{
    public function tambah(Request $request){
        $this->validate($request ,[
            'name'=>'required',
            'email'=>'required',
            'webinar_id'=>'required',
            'link'=>'required',
        ]);

        $tambah = new Sertifikat;
        $tambah->name = $request->name;
        $tambah->webinar_id = $request->webinar_id;
        $tambah->email = $request->email;
        $tambah->link = $request->link;
        $tambah->save();
        return redirect('/')->with('success',' ');


    }
    public function input(){
        $hasil = CategoryWebinar::all();
        return view('content',['category'=>$hasil]);
    }
    public function list(){
        $hasil = Sertifikat::with(['CategoryWebinar'])->get();

        return view('list',['liat'=>$hasil]);
    }
}
