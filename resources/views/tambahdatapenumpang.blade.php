@extends('home')
@section('tambahdatapenumpang')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{ url('tambahdatapenumpang') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
   									<div class="row">
   										<div class="col-md-6">
		                                    <div class="form-group">
		                                        <label class="col-md-12">Nama</label>
		                                        <div class="col-md-12">
		                                            <input type="text" name="Nama" placeholder="Nama" class="form-control form-control-line">
		                                        </div>
		                                    </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">NoTelepon</label>
			                                        <div class="col-md-12">
			                                            <input name="No_Telepon"  placeholder="Notelepon" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
                                                    <label class="col-md-12">Email</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="Email" placeholder="email" class="form-control form-control-line">
                                                    </div>
                                                </div>
			                                    </div>

			                                    <div class="form-group">
			                                        <div class="col-sm-12">
			                                            <button class="btn btn-success">Tambahkan</button>
			                                        </div>
			                                    </div>
   											</div>
                                           </div>
                                           <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <form action="{{ url('') }}" method="POST" class="form-horizontal form-material">
                                                        @csrf
                                                        <div class="row">

                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <h4 class="card-title">daftar penumpang</h4>
                                                                        <h6 class="card-subtitle">Arnest <code>Shuttle

                                                                            </code></h6>
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr></tr>
                                                                                        <th>No</th>
                                                                                        <th>Name</th>
                                                                                        <th>no telepon</th>
                                                                                        <th>email</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @if(!empty($datapenumpang))
                                                                                        @foreach ($datapenumpang as $item)
                                                                                            <tr>
                                                                                                <td>{{ $item->id }}</td>
                                                                                                <td>{{ $item->name }}</td>
                                                                                                <td>{{ $item->no_telepon }}</td>
                                                                                                <td>{{ $item->email }}</td>

                                                                                            </tr>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
   										<!-- <div class="col-md-6">
			                                    <div class="form-group">
			                                        <label class="col-md-12"></label>
			                                        <div class="col-md-12">
			                                            <input type="text" placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">Berangkat</label>
			                                        <div class="col-md-12">
			                                            <input type="text" placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
   										</div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection

