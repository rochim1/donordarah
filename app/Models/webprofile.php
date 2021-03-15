<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webprofile extends Model
{
    use HasFactory;
    protected $table = "webprofile";
    protected $fillable = ['nama_perusahaan','deskripsi_perusahaan','email','telepon','gmaps','alamat'];
}
