@extends('home')
@section('beranda')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{ url('datapemesanan') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <h4 class="card-title">Data pemesanan</h4>
                                                    <h6 class="card-subtitle">Arnest <code>Shuttle

                                                    {{-- <div class="table-responsive">
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
                                                                @if(!empty($datapemesanan))
                                                                @foreach ($datapemesanan as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->nama_pembeli }}</td>
                                                                        <td>{{ $item->jadwal_keberangkatan_start }}</td>
                                                                        <td>{{ $item->Jamend }}</td>
                                                                        <td>{{ $item->Tanggalend }}</td>
                                                                        <td>{{ $item->jumlah_tiket }}</td>
                                                                        <td>{{ $item->harga_tiket }}</td>
                                                                    </tr> --}}
                                                                @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
@endsection
