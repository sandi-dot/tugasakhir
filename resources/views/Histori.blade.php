@extends('home')
@section('Histori')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{ url('Histori') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <h4 class="card-title">History Perjalan</h4>
                                                    <h6 class="card-subtitle">Arnest <code>Shuttle

                                                        </code></h6>
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
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($Histori as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->nama_pembeli }}</td>
                                                                        <td>{{ $item->jadwal_keberangkatan_start }}</td>
                                                                        <td>{{ $item->Jamend }}</td>
                                                                        <td>{{ $item->Tanggalend }}</td>
                                                                        <td>{{ $item->jumlah_tiket }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
@endsection
