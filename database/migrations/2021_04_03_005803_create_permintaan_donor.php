<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanDonor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_donor', function (Blueprint $table) {
            $table->id('id_permintaanDonor');
            $table->bigInteger('id_darah')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->string('keterangan');
            $table->char('status_acc');
            $table->string('foto')->nullable();
            $table->date('tanggal_permintaan');
            $table->date('tanggal_selesai');
            $table->string('atas_namaPasien');
            $table->char('jenis_kelPasien');
            $table->string('rumah_sakit');
            $table->integer('no_rm');
            $table->string('bangsal');
            $table->integer('kamar_no');
            $table->integer('umur');
            $table->date('tanggal_lahir')->nullable();
            $table->integer('jumlah_kantong');
            $table->timestamps();

            $table->foreign('id_darah')->references('id_golDar')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
	Schema::dropIfExists('permintaan_donor');
    }
}
