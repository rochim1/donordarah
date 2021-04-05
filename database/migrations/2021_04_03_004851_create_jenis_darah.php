<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisDarah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_darah', function (Blueprint $table) {
            $table->id('id_jenisDarah');
            $table->char('nama_jenisDarah');
            $table->string('deskripsi');  
            $table->timestamps();
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
	Schema::dropIfExists('jenis_darah');
    }
}
