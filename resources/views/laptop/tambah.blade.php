@extends('layouts.master')

@section('content')

<!-- <div class="container"> -->
<div class="row mt-5">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
			<div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded" >
			  <div class="panel-heading">
			    <center>
			    	<h3 class="panel-title">TAMBAH DATA</h3>
			    </center>
			  </div>

			  <div class="panel-body mt-3">
			    <form action="/laptop/create" class="form-horizontal" method="POST">
					{{csrf_field()}}
					<div class="form-group row">
						<div class="col-md-4">
							<label for="inputNama" class="control-label float-right">Merek :</label>
						</div>
						
						<div class="col-md-7">
						<input name="merek" type="text" class="form-control" id="inputMerek" placeholder="Masukan merek" >
						@if ($errors->has('merek'))             
							<span class="form-text text-danger">{{$errors->first('merek')}}</span>
						@endif 
						
						</div>												
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						<label for="inputTipe" class="control-label float-right">Tipe :</label>
						</div>
						<div class="col-md-7">
						<input name="tipe" type="text" class="form-control" id="inputTipe" placeholder="Masukan tipe" >
						@if ($errors->has('tipe'))             
							<span class="form-text text-danger">{{$errors->first('tipe')}}</span>
						@endif 
						
						</div>												
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						<label for="inputJenisProsesor" class="control-label float-right">Jenis Prosesor :</label>
						</div>
						<div class="col-md-7">
							<input name="jenis_prosesor" type="text" class="form-control"  placeholder="Masukan jenis prosesor" >
							@if ($errors->has('jenis_prosesor'))             
								<span class="form-text text-danger">{{$errors->first('jenis_prosesor')}}</span>
							@endif
						</div>						
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						<label for="inputJenisProsesor" class="control-label float-right">Ram :</label>
						</div>
						<div class="col-md-7">
							<input name="ram" type="text" class="form-control"  placeholder="Masukan besar ram" >
							@if ($errors->has('ram'))             
								<span class="form-text text-danger">{{$errors->first('ram')}}</span>
							@endif
						</div>						
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						<label for="inputHardisk" class="control-label float-right">Hardisk :</label>
						</div>
						<div class="col-md-7">
							<input name="hardisk" type="text" class="form-control"  placeholder="Masukan besar hardisk" >
							@if ($errors->has('hardisk'))             
								<span class="form-text text-danger">{{$errors->first('hardisk')}}</span>
							@endif
						</div>						
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						<label for="inputHarga" class="control-label float-right">Harga :</label>
						</div>
						<div class="col-md-7">
							<input name="harga" type="text" class="form-control"  placeholder="Masukan harga" >
							@if ($errors->has('harga'))             
								<span class="form-text text-danger">{{$errors->first('harga')}}</span>
							@endif
						</div>						
					</div>

					<div class="form-group row">
						<div class="col-md-4">
						</div>
							<div class="col-md-7">
								<a href="/laptop"><button type="button" class="btn btn-secondary" >Batal</button></a>
							<button type="submit" class="btn btn-primary" >Tambah</button>
						</div>
					</div>
						
					</div>
						
				</form>
			  </div>
		</div>
</div>
<!-- </div> -->
@endsection