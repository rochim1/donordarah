<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('news_rs')->create('berita', function (Blueprint $table) {
            $table->id('id_berita');
            $table->bigInteger('id_admin');
            $table->date('tanggal_upload');



            
            $table->string('foto')->nullable();
            $table->string('keterangan');
            $table->timestamps();

            // $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('news_rs')->dropIfExists('berita');
    }
}
