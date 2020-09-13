<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PilihKursi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pilih_kursi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pembelian');
            $table->string('No_kursi');
            $table->enum('status_kursi',['booking','kosong']);
            $table->text('Cek_ketersediaan_kursi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
