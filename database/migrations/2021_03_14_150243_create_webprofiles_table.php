<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webprofile', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->longText('deskripsi_perusahaan');
            $table->string('email');
            $table->string('telpon');
            $table->string('gmaps')->nullable();
            $table->longText('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webprofile');
    }
}
