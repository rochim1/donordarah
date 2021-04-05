<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     Artisan::call('db:create', ['name' => 'first_rs']);
    //     Artisan::call('db:create', ['name' => 'news_rs']);
    //     Artisan::call('db:create', ['name' => 'second_rs']);
    // }
    public function up()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->char('jenis_kel');
            $table->string('alamat');
            $table->bigInteger('gol_dar')->unsigned();
            $table->date('tanggal_lahir');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verify_code')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
	Schema::dropIfExists('users');
    }
}
