<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webprofile;

class admincontroller extends Controller
{
    public function webprofile(Request $request){
        // $flight = new webprofile;
        $flight = webprofile::find(1);
        if ($flight) {   
            $flight->nama_perusahaan = $request->nama;
            $flight->deskripsi_perusahaan = $request->deskripsi;
            $flight->email = $request->email;
            $flight->telpon = $request->telpon;
            $flight->gmaps = $request->gmaps;
            $flight->alamat = $request->alamat;
            $flight->save();
            return 'data berhasil disimpan';
        } else {
            return 'data gagal disimpan';
        }


    }
}
