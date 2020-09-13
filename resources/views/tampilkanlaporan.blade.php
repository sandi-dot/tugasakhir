@extends('HomeAdmin')
@section('laporan')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">laporan </h4>
                                <h6 class="card-subtitle">Arnest <code>Shuttle
                                    <div class="options">
                                        <form action="{{ url('laporan_filter') }}" method="POST" class="form-inline">
                                            @csrf
                                            <div class="form-group mb-2">
                                              <label for="staticEmail2" class="sr-only">Email</label>

                                            </div>
                                            <div class="form-group mx-sm-3 mb-2">
                                              <input type="month" class="form-control" name="filter">
                                            </div>
                                            <button type="submit" class="btn btn-primary mb-2">Cari</button>
                                          </form>
                                    </div>
                                    </code></h6>
                                <form action="{{ url('datapemesanan') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <h4 class="card-title">Data pemesanan</h4>
                                                    <h6 class="card-subtitle">Arnest <code>Shuttle

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr></tr>
                                                                    <th>No</th>
                                                                    <th>Name</th>
                                                                    <th>jadwal keberangkatan</th>
                                                                    <th>jam</th>
                                                                    <th>tanggal</th>
                                                                    <th>jumlah tiket</th>
                                                                    <th>harga tiket</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if(!empty($LaporanModel))
                                                                <?php $sum    =    []; ?>
                                                                <?php $jumlah_tiket    =    []; ?>
                                                                @foreach ($LaporanModel as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->nama_pembeli }}</td>
                                                                        <td>{{ $item->jadwal_keberangkatan_start }}</td>
                                                                        <td>{{ $item->Jamend }}</td>
                                                                        <td>{{ $item->Tanggalend }}</td>
                                                                        <td>{{ $item->jumlah_tiket }}</td>
                                                                        <td>{{ $item->harga_tiket }}</td>
                                                                    </tr>
                                                                    <?php
                                                                        array_push($jumlah_tiket, (int)$item->jumlah_tiket);
                                                                        $itung      =      array_sum($jumlah_tiket);
                                                                        array_push($sum, (int)$item->harga_tiket);
                                                                        $hitung      =      array_sum($sum);
                                                                    ?>
                                                                @endforeach
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Total <?php echo $itung; ?></td>
                                                                    <td>Total <?php echo $hitung; ?></td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr></tr>
                                                                    <th>Nama</th>
                                                                    <th>no polisi</th>
                                                                    <th>bensin</th>
                                                                    <th>biaya tol</th>
                                                                    <th>uang makan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if(!empty($biayaperjalanan_model))
                                                                    @foreach ($biayaperjalanan_model as $item)
                                                                        <tr>
                                                                            <td>{{ $item->id }}</td>
                                                                            <td>{{ $item->namasupir }}</td>
                                                                            <td>{{ $item->no_polisi }}</td>
                                                                            <td>{{ $item->bensin }}</td>
                                                                            <td>{{ $item->biayatol }}</td>
                                                                            <td>{{ $item->uangmakan }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
@endsection
