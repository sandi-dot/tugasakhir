<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKeberangkatan extends Model
{
	protected $fillable = [
		'nama_pembeli', 'jadwal_keberangkatan_start', 'jamend','berangkat_Start','Tanggalend','jumlah_tiket','harga_tiket',
	];
    //
}
