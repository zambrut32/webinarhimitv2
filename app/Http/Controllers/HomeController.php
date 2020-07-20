<?php

namespace App\Http\Controllers;

use App\Sertifikat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hasil = Sertifikat::all();
        return view('list',['liat'=>$hasil]);
//        return view('layouts.listwebinar');

    }
    public function CategoryWebinar(){
        return view('layouts.listwebinar');

    }

}
