<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin\katalog;
use App\admin\foto;
use DB;
use App\admin\album;

class MasterController extends Controller
{
    public function index(){


    	return view('master/index');
    }

    public function kontak(){


    	return view('master/kontak');
    }

     public function tentang(){


        return view('master/tentang');
    }

    public function toko(){

        $katalog= katalog::paginate(9);

    	return view('master/toko',compact('katalog'));
    }

     public function tokodet($id){

        
        $katalog = DB::table('foto')
        ->where('foto.id_katalog','=', $id)
        ->join('katalog','foto.id_katalog', '=', 'katalog.id')
        ->select('foto.*','katalog.cover','katalog.nama','katalog.deskripsi','katalog.harga')
        ->get();

        return view('master/tokodet',compact('katalog'));
    }

     public function login(){


    	return view('master/login');
    }

    public function daftar(){


    	return view('master/daftar');
    }

     public function gallery(){

        $data = album::all();

        return view('master/album',compact('data'));
    }

    public function gallery2($judul){

       
        $id = album::where('judul', $judul)->first()->id;
        
        $data = DB::table('gallery')
        ->where('gallery.id_album','=', $id)
        ->join('album','gallery.id_album', '=', 'album.id')
        ->select('gallery.*', 'album.id as id_album ', 'album.cover','album.judul')
        ->get();

        return view('master/gallery',compact('data'));
    }

    public function cart(){


        return view('master/cart');
    }

     public function cek_out(){


        return view('master/cek_out');
    }

}
