<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccPermintaandonor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_permintaandonor', function (Blueprint $table) {
            $table->id('id_acc_permintaanDonor');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_darah')->unsigned();
            $table->integer('jumlah_kantong');
            $table->char('status_acc');
            $table->date('tanggal_acc');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
	Schema::dropIfExists('acc_permintaandonor');
    }
}
