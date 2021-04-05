<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokDarah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_darah', function (Blueprint $table) {
            $table->id('id_stokdrh');
            $table->bigInteger('id_darah')->unsigned();
            $table->integer('jumlah_kantung');
            $table->timestamps();

            $table->foreign('id_darah')->references('id_golDar')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
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
	Schema::dropIfExists('stok_darah');
    }
}
