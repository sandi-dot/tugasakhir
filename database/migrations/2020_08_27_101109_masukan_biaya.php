<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasukanBiaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


            Schema::create('biayaperjalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namasupir');
            $table->string('no_polisi');
            $table->string('bensin');
            $table->string('biayatol');
            $table->string('uangmakan');
            $table->string('tanggal');
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('biayaperjalanan');
        //
    }
}
