@extends('home')
@section('pembayaran')
    <div class="pembayaran">
        <div class="konten-pembayaran">
            <h2>Pembayaran</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: {{ $pembayaran->nama_pembeli }}</td>
                </tr>
                <tr>
                    <td>Tagihan</td>
                    <td>: Rp. {{ $pembayaran->harga_tiket }}</td>
                </tr>
            </table>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="bayar">
                    <a href="{{ url('kode_pembayaran?pembayaran=ovo&id='.$pembayaran->id) }}"><img src="./assets/images/ovo.png"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bayar">
                    <a href="{{ url('kode_pembayaran?pembayaran=Link Aja&id='.$pembayaran->id) }}"><img src="./assets/images/linkaja.png">
                </div>
            </div>
            <div class="col-md-4">
                <div class="bayar">
                    <a href="{{ url('kode_pembayaran?pembayaran=bca&id='.$pembayaran->id) }}"><img src="./assets/images/bca.png">
                </div>
            </div>
        </div>
    </div>
@endsection
