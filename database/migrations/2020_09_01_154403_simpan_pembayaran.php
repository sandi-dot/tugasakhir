<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SimpanPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SimpanPembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pembeli');
            $table->string('harga');
            $table->string('metodebayar');
            $table->string('kode_generate');
            $table->enum('status',['dibayar','belum_dibayar']);
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
