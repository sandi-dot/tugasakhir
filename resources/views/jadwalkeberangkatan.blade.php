@extends('home')
@section('jadwal_keberangkatan')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{ url('jadwal_keberangkatan') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
   									<div class="row">
   										<div class="col-md-6">
		                                    <div class="form-group">
		                                        <label class="col-md-12">Nama</label>
		                                        <div class="col-md-12">
		                                            <input type="text" name="nama" placeholder="isi nama" class="form-control form-control-line">
		                                        </div>
		                                    </div>
			                          		<div class="form-group">
			                                   	   <label class="col-sm-12">Jadwal keberangkatan</label>
			                                       <div class="col-sm-12">
			                                            <select onchange="Jadwalkeberangkatan()" name="jadwalkeberangkatan" id="keberangkatan" class="form-control form-control-line">
			                                                <option value="Bandung-Purwakarta" >Bandung-Purwakarta</option>
			                                                <option value="Purwakarta-Bandung" >Purwakarta-Bandung</option>
			                                                <option value="Bandung-Sadang" >Bandung-Sadang</option>
			                                                <option value="Sadang-Bandung" >Sadang-Bandung</option>
			                                            </select>
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">Jam</label>
			                                        <div class="col-md-12">
			                                            <input name="jam" type="time" placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">Berangkat</label>
			                                        <div class="col-md-12">
                                                        <select name="berangkat" type="text" placeholder="" class="form-control form-control-line">
                                                            <option value="(pool)giant" >(pool)giant</option>
			                                                <option value="(pool)sadang" >(pool)sadang</option>
			                                                <option value="(pool)baltos" >(pool)baltos</option>
			                                                <option value="(pool)Btc" >(pool)Btc</option>
			                                            </select>
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">tanggal</label>
			                                        <div class="col-md-12">
			                                            <input name="tanggal" type="date" placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">Jumlah tiket</label>
			                                        <div class="col-md-12">
			                                            <input name="jumlahtiket" oninput="Jadwalkeberangkatan()" id="jumlah_tiket" type="number" placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="harga tiket">
			                                        <label class="col-md-12">Harga tiket</label>
			                                        <div class="col-md-12">
			                                            <input name="hargatiket" id="harga_tiket" type="text" placeholder="" class="form-control form-control-line">
			                                    </div>
			                                    <div class="form-group">
			                                        <div class="col-sm-12">
			                                            <button class="btn btn-success">Pesan</button>
			                                        </div>
			                                    </div>
   											</div>
   										</div>
   										<div class="col-md-6">
                                            <center><h6>Pilih Kursi</h6></center>
                                            <div class="pilih-kursi">
                                                <div class="row">
                                                    @if(!empty($booking))
                                                        <?php $no   =   1; ?>
                                                        @foreach($booking as $item)
                                                            <div class="col-md-4">
                                                                @if($item->status_kursi == "kosong")
                                                                    <div class="kursi kosong" no-kursi="{{ $no }}" id-kursi="{{ $item->id }}">
                                                                        <h3>{{ $no++  }}</h3>
                                                                    </div>
                                                                @else
                                                                    <div class="kursi booking" no-kursi="{{ $no }}" id-kursi="{{ $item->id }}">
                                                                        <h3>{{ $no++ }}</h3>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <input type="hidden" name="id_kursi" id="id_kursi" value="">
                                                <input type="hidden" name="no_kursi" id="no_kursi" value="">
                                            </div>
   										</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

            <script>
                function Jadwalkeberangkatan() {
                    let json            =      '<?php echo $harga; ?>';
                    let keberangkatan   =      $('#keberangkatan').val();
                    let jumlah_tiket    =      $('#jumlah_tiket').val();
					if (jumlah_tiket == '') {
						jumlah_tiket    =   1;
					}
                    let harga           =      JSON.parse(json);
                    let filter          =      harga.filter((item) => {
                        return keberangkatan == item.keberangkatan;
                    });
                    let hasil           =      filter[0].harga * jumlah_tiket;
					$('#harga_tiket').val(hasil);
                    // console.log(hasil);
                }

                $(document).ready(function() {

                    $('.kursi').on('click', function() {
                        $('.kursi').removeClass('active');
                        let cek_status       =       $(this).attr('class');
                        if (cek_status == 'kursi kosong') {
                            $(this).addClass('active');
                            let id_kursi        =      $(this).attr('id-kursi');
                            let no_kursi        =      $(this).attr('no-kursi');
                            $('#id_kursi').val(id_kursi);
                            $('#no_kursi').val(no_kursi);
                            console.log(id_kursi);
                        }
                        // console.log(cek_status);
                    });
                });
            </script>
@endsection

