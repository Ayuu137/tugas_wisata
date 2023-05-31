<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Tempatwisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        // $tempat = Tempatwisata::all();
        return view('wishlist');
    }
    // public function store(Request $request)
    // {
    //     $wish = new Tempatwisata;
    //     $wish->nama_tempat = $request->nama_tempat;
    //     $wish->deskrisi = $request->deskrisi;
    //     $wish->alamat = $request->alamat;
    //     return view('wishlist');
    // }
    // public function update(Request $request)
    // {

    //     $user = Auth()->User()->id;
    //     $tempat = Tempatwisata::select('id','nama_tempat')->get();
        // $wish = Wishlist::create($request->all());
        // $wish = Wishlist::create([
        //     'tempatwisata_id' => request('id'),
        //     'nama_list_tempatwisata' => request('nama_tempat'),
        //     'user_id' => user()->where('id')
        // ]);

        // return view('wishlist',['tempatlist' => $tempat]);
        // dd($user,$tempat);
    // }
}
