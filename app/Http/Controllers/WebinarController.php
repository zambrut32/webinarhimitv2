<?php

namespace App\Http\Controllers;

use App\CategoryWebinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
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
        $hasil = CategoryWebinar::all();
        return view('layouts.listwebinar', ['liat' => $hasil]);
//        return view('layouts.listwebinar');
    }

    public function add()
    {
        return view('layouts.addwebinar');

    }

    public function prosesadd(Request $request)
    {
        $this->validate($request ,[
            'name'=>'required',
            'status'=>'required',
            'desc'=>'required',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tgl'=>'required',
            'waktu'=>'required',

        ]);
        // menyimpan data file yang diupload ke variabel $file

        $imageName = time() . '.' . $request->img->extension();

        $request->img->move(public_path('img/poster'), $imageName);

        $tambah = new CategoryWebinar;
        $tambah->name = $request->name;
        $tambah->status = $request->status;
        $tambah->desc = $request->desc;
        $tambah->img = $imageName;
        $tambah->tgl = $request->tgl;
        $tambah->waktu = $request->waktu;

        $tambah->save();
        return redirect('/home');
    }

    public function destroy($id)
    {
        $data = CategoryWebinar::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data = CategoryWebinar::find($id);
        return view('layouts.editwebinar', ['item' => $data]);
    }
    public function update($id ,Request $request){
        $this->validate($request ,[

            'img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        $tambah = CategoryWebinar::find($id);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->getClientOriginalExtension();

            $request->img->move(public_path('img/poster'), $imageName);
            $tambah->img = $imageName;
        }


        $tambah->name = $request->name;
        $tambah->status = $request->status;
        $tambah->desc = $request->desc;

        $tambah->tgl = $request->tgl;
        $tambah->waktu = $request->waktu;

        $tambah->save();
        return redirect('/home');
    }
}
