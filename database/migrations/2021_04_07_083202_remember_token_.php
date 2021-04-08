<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RememberToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->table('admin', function (Blueprint $table) {
            $table->rememberToken();
            // pendefinisian after() harus di akhir sendiri agar bisa buat foreign / tidak error
            $table->boolean('admited')->default(false)->after('password');
            $table->bigInteger('admited_by')->unsigned()->nullable()->after('admited');
            $table->foreign('admited_by')->references('id_admin')->on('admin')->onUpdate('cascade')->onDelete('cascade');
        });

        // 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('admin', function (Blueprint $table) {
            $table->dropColumn('remember_token');
            $table->dropColumn('admited');
            $table->dropColumn('admited_by');
        });
    }
}
