<?php

namespace App\Http\Controllers;

use App\Models\Tempatwisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempatwisataController extends Controller
{
    public function index()
    {
        $tempat = Tempatwisata::all();
        return view('tempatwisata',['tempatlist' => $tempat]);
    }
    public function create()
    {
        return view('tempatwisata-tambah');
    }
    public function store(Request $request)
    {
        // $newName = '';

        // if($request->file('photo')){
        // $extension = $request->file('photo')->getClientOriginalExtension();
        // $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
        // $request->file('photo')->storeAs('photo',$newName);
        // }
        
        // $request['image'] = $newName;
        // $tempat = Tempatwisata::create($request->all());

        $tempat = new Tempatwisata;
        $tempat->nama_tempat = $request->nama_tempat;
        // $tempat->gambar = $request->gambar;
        $tempat->deskrisi = $request->deskrisi;
        $tempat->alamat = $request->alamat;
        $tempat->save();
        
        return redirect('tempatwisata');
    }
}
