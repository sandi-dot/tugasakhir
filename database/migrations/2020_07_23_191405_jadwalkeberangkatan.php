<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jadwalkeberangkatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama_pembeli', 100);
            $table->string('jadwal_keberangkatan_start');
            $table->string('Jamend');
            $table->string('berangkat_Start');
            $table->date('Tanggalend');
            $table->bigInteger('jumlah_tiket');
            $table->char('harga_tiket', 100);
            $table->string('id_user')->nullable();
            $table->string('id_boking');
            $table->string('no_kursi');
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
        //
    }
}
