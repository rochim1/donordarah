<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use App\Libraries\Doctrine\CharType;
use Doctrine\DBAL\Types\CharType;
use Doctrine\DBAL\Types\Type;

class Edit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function __construct()
    {
        Type::addType('char', CharType::class);
    }
    
    public function up()
    {
        // Schema::connection('mysql2')->table('admin', function (Blueprint $table) {
        //     $table->dropForeign(['gol_darah']);
        // });

        Schema::connection('mysql2')->table('admin', function (Blueprint $table) {
            // admin_gol_darah_foreign adalah nama relasi
            // $table->dropForeign('admin_gol_darah_foreign');
           
            $table->char('jenis_kelamin')->nullable()->change();
            $table->date('tanggal_lahir')->nullable()->change();
            // ternyata tinggal begini untuk edit foreign key : 
            $table->foreignId('gol_darah')->nullable()->change();
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('admin', function ($table) {
            $table->dropForeign(['gol_darah']);
        });
    }
}
