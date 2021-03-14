<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PasienDbFirstRs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('news_rs')->create('news', function ($table) {
            $table->bigIncrements('id');
            $table->string('news_category');
            $table->string('news_title');
            $table->string('body');
            $table->string('author');
            $table->string('tagline');
            $table->timestamps();
        });

        Schema::connection('mysql2')->create('admin', function ($table) {
            $table->bigIncrements('id');
            $table->string('nama_admin');
        });

        Schema::connection('mysql2')->create('lv_admin', function ($table) {
            $table->bigIncrements('id');
            $table->string('lv_admin');
        });

        Schema::connection('mysql2')->create('previlage_admin', function ($table) {
            $table->bigIncrements('id');
            $table->string('prev_admin');
        });

        Schema::connection('mysql2')->create('lv_admin_previlage', function ($table) {
            $table->bigIncrements('id');
            $table->string('a_prev_admin');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
        Schema::connection('mysql2')->dropIfExists('users');
    }
}
