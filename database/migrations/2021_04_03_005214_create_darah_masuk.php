<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarahMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darah_masuk', function (Blueprint $table) {
            $table->id('id_darahmasuk');
            $table->bigInteger('id_darah')->unsigned();
            $table->bigInteger('jenis_darah')->unsigned();
            $table->date('tanggal_masuk');
            $table->integer('jumlah_kantung')->default(1);
            $table->char('penyimpanan');
            $table->date('tanggal_exp');
            $table->string('letak_simpan');
            $table->string('jenis_donor');
            $table->bigInteger('id_user')->unsigned()->comment('pendonor');
            $table->bigInteger('id_admin')->unsigned()->comment('pencatat');
            $table->integer('event')->nullable();
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_darah')->references('id_golDar')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jenis_darah')->references('id_jenisDarah')->on('jenis_darah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {	
        Schema::disableForeignKeyConstraints();
        Schema::connection('news-rs')->disableForeignKeyConstraints();
        Schema::connection('mysqsl2')->disableForeignKeyConstraints();
        Schema::dropIfExists('darah_masuk');
    }
}
