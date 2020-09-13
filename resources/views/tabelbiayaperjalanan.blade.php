@extends('HomeAdmin')
@section('tambahbiaya')
 <div class="row">

<div class="col-lg-12">
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">Data pegeluaran perjalanan</h4>
            <h6 class="card-subtitle">Arnest <code>Shuttle
                <div class="options">
                    <a href="{{ url('tambahbiaya') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                    <button class="btn btn-primary"><i class="fa fa-download"></i></button>
                </div>
                </code></h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr></tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>no polisi</th>
                            <th>bensin</th>
                            <th>biaya tol</th>
                            <th>uang makan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($tabelbiaya))
                            @foreach ($tabelbiaya as $item)
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
