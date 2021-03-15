<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webprofile;

class usercontroller extends Controller
{
    public function welcome(){
        $data = webprofile::first();
        if ($data) {
            $telpon = $data->telpon; 
            $email = $data->email;
            $deskripsi = $data->deskripsi_perusahaan;
            $gmaps = $data->gmaps;
            $alamat = $data->alamat;
            return view('menu.landing', compact('telpon','email','deskripsi','gmaps','alamat'));
        }else {
            return "halaman tidak dapat di akse, setting web profil di halaman admin";
        }
    }
}
