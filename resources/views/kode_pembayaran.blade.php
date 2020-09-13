@extends('home')
@section('kode_pembayaran')
<div class="pembayaran">
    <img src="{{ url('./assets/images/arnes.jpg') }}">
    <div class="konten-pembayaran">
        <h2>Pembayaran</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $data_pembeli->nama_pembeli }}</td>
            </tr>
            <tr>
                <td>Tagihan</td>
                <td>: Rp. {{ $data_pembeli->harga_tiket }}</td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td>: {{ $pembayaran }}</td>
            </tr>
            <tr>
                <td>Kode Pembayaran</td>
                <td style="text-transform: uppercase;">: {{ $generate }}</td>
            </tr>
            <tr>
                <td>no kursi</td>
                <td>: {{ $data_pembeli->no_kursi }}</td>
            </tr>
            <tr>
                <td>status</td>
                <td style="text-transform: uppercase;">: Belum dibayar</td>
            </tr>
        </table>
    </div>
</div>
@endsection
