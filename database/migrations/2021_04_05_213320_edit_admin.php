<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->table('admin', function ($table) {
            $table->renameColumn('id', 'id_admin');
            
            $table->char('level_admin');
            $table->char('jenis_kelamin');
            $table->string('email');
            $table->string('alamat')->nullable();
            // $table->bigInteger('gol_darah')->nullable()->unsigned();
            $table->bigInteger('gol_darah')->unsigned();
            $table->date('tanggal_lahir');
            $table->date('email_verified_at')->nullable();
            $table->string('verify_code')->nullable();
            $table->string('password');
            $table->timestamps();

            $table->foreign('gol_darah')->references('id_golDar')->on('first_rs.golongan_darah')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('darah_masuk', function (Blueprint $table) {
            $table->foreign('id_admin')->references('id_admin')->on('second_rs.admin')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::dropIfExists('admin');
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
