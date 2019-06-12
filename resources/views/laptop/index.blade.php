@extends('layouts.master')

@section('content')
		@if(session('sukses'))
			<div class="row mt-4">
   				<div class="col-md-4"></div>
   				<div class="col-md-4">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{session('sukses')}}
					</div>
				</div>
  			</div>
		@endif

		<!-- @if(session('gagal'))
			<div class="row mt-3">
   				<div class="col-md-4"></div>
				<div class="alert alert-danger col-md-4" role="alert">
					{{session('gagal')}}
				</div>
  			</div>
		@endif -->

		<div class="card mt-3">
        <div class="card-header " style="background-color: #bf0e0e">
        	<div class="row col-md-12">
            	<h3 style="color: white;">Data Laptop</h3>
            	<div class="col-lg-4">
					<form action="" method="post">
					    <div class="input-group">
					      <input type="text" class="form-control" placeholder="Cari data laptop.." name="keyword">
					      <span class="input-group-btn">
					        <button class="btn btn-primary" type="submit">Cari</button>
					      </span>
					    </div>
				    </form>
				</div>
            	<a href="laptop/tambah" class="btn btn-primary" >Tambah Data</a>
            </div>
        </div>
        <div class="table-responsive " style="height: 570px;" >
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="scroll">     
			        <table class="table table-stripped table-bordered">
			            <thead class="thead-dark" align="center">
							<tr class="info">
								<th>No</th>
								<th>ID</th>
								<th>Merek</th>
								<th>Tipe</th>
								<th>Jenis Prosesor</th>
								<th>Ram (Mb)</th>
								<th>Hardisk (Mb)</th>
								<th>Harga</th>
								<th>Aksi</th>
							</tr>
							@foreach($laptop as $i => $ltp)
							<tr>
								<td>{{$i+1}}</td>
								<td>{{$ltp->id}}</td>
								<td>{{$ltp->merek}}</td>
								<td>{{$ltp->tipe}}</td>
								<td>{{$ltp->jenis_prosesor}}</td>
								<td>{{$ltp->ram}}</td>
								<td>{{$ltp->hardisk}}</td>
								<td>{{$ltp->harga}}</td>
								<td>
									<!-- <a href="/laptop/{{$ltp->id}}/edit" class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></a>
									<a href="/laptop/{{$ltp->id}}/delete" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')"></a> -->
									<a href="/laptop/{{$ltp->id}}/edit" class="badge badge-warning" data-toggle="tooltip" title="Edit">Ubah</a>
									<a href="/laptop/{{$ltp->id}}/delete" class="badge badge-danger" data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
								</td>
							</tr>
							@endforeach
						</table>
			 		</div>
                </div>
            </div>
        </div>
    </div>
@endsection
	


