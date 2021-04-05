<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webprofile extends Model
{
    use HasFactory;
    // variable connection untuk menentukan nama koneksi database yang digunakan
    protected $connection = 'news_rs';
    protected $table = "webprofile";
    protected $fillable = ['nama_perusahaan','deskripsi_perusahaan','email','telepon','gmaps','alamat'];
}
