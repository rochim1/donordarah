<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDonorDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_donor_detail', function (Blueprint $table) {
            $table->id('id_user_dnr');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_darahmasuk')->unsigned();
            $table->integer('BB');
            $table->integer('TB');
            $table->char('tensi');
            $table->float('HB');
            $table->integer('umur');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_darahmasuk')->references('id_darahmasuk')->on('darah_masuk')->onUpdate('cascade')->onDelete('cascade');
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
	Schema::dropIfExists('users_donor_detail');
    }
}
