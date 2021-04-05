<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nama_admin');
            $table->char('level_admin');
            $table->char('jenis_kelamin');
            $table->string('email');
            $table->string('alamat')->nullable();
            $table->bigInteger('gol_darah')->unsigned();
            $table->date('tanggal_lahir');
            $table->date('email_verified_at')->nullable();
            $table->string('verify_code')->nullable();
            $table->string('password');
            $table->timestamps();
            
            $table->foreign('gol_darah')->references('id_golDar')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
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
	Schema::dropIfExists('admin');
    }
}
