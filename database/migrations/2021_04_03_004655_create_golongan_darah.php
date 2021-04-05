<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolonganDarah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golongan_darah', function (Blueprint $table) {
            $table->id('id_golDar');
            $table->char('nama_goldar');
            $table->string('deskripsi');
            $table->timestamps();
        });
        
        // menambahi foreign pada table user
        
        Schema::table('users', function(Blueprint $table){
            $table->foreign('gol_dar')->references('id_golDar')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {	Schema::disableForeignKeyConstraints();
        Schema::connection('news-rs')->disableForeignKeyConstraints();
	Schema::connection('mysqsl2')->disableForeignKeyConstraints();
	Schema::dropIfExists('golongan_darah');
    }
}
