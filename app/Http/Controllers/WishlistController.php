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
    // public function index()
    // {
    //     $tempat = Tempatwisata::all();
    //     return view('wishlist',['tempatlist' => $tempat]);
    // }
    public function store(Request $request)
    {
        $user = User::get('id');
        // $tempat = Tempatwisata::select('id','nama_tempat')->get();
        // $wish = Wishlist::create([
        //     'tempatwisata_id' => request('id'),
        //     'nama_list_tempatwisata' => request('nama_tempat'),
        //     'user_id' => User::get('id')
        // ]);

        // return view('wishlist',['tempatlist' => $tempat]);
        dd($user);
    }
}
