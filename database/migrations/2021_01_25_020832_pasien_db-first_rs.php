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
        Schema::connection('news_rs')->create('berita', function ($table) {
            $table->id('id_berita');
            $table->date('tanggal_upload');
            $table->string('news_category');
            $table->string('news_title');
            $table->string('body');
            $table->bigInteger('id_admin')->comment('author');            
            $table->string('tagline')->nullable();
            $table->string('foto')->nullable();
            $table->string('keterangan');
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
    {	Schema::disableForeignKeyConstraints();
        Schema::connection('news-rs')->disableForeignKeyConstraints();
	Schema::connection('mysqsl2')->disableForeignKeyConstraints();
	Schema::connection('news_rs')->dropIfExists('berita');
        Schema::connection('mysql2')->dropIfExists('admin');
        Schema::connection('mysql2')->dropIfExists('lv_admin');
        Schema::connection('mysql2')->dropIfExists('previlage_admin');
        Schema::connection('mysql2')->dropIfExists('lv_admin_previlage');
    }
}
