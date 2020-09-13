@extends('HomeAdmin')
@section('tambahbiaya')
 <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{ url('tambahbiaya') }}" method="POST" class="form-horizontal form-material">
                                    @csrf
   									<div class="row">
   										<div class="col-md-6">
		                                    <div class="form-group">
		                                        <label class="col-md-12">Nama Supir</label>
		                                        <div class="col-md-12">
		                                            <input type="text" name="namasupir" placeholder="" class="form-control form-control-line">
		                                        </div>
		                                    </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <label class="col-md-12">Nopolisi</label>
			                                        <div class="col-md-12">
			                                            <input name="no_polisi"  placeholder="" class="form-control form-control-line">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
                                                    <label class="col-md-12">Bensin</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="bensin" placeholder="" class="form-control form-control-line">
                                                    </div>
                                                </div>
			                                    </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Biaya tol</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="biayatol" placeholder="" class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Uang Makan</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="uangmakan" placeholder="" class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Tanggal</label>
                                                    <div class="col-md-12">
                                                        <input type="date" name="tanggal" placeholder="" class="form-control form-control-line">
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

