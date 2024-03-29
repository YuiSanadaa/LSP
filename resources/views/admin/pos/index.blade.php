@extends('layouts.master')
@section('content')
<div class="col-sm-12 grid-margin">
	<div class="card">
		<div class="card-body">
			<h1><center>Point Of Sales</center></h1>
			<hr>
			<div class="col-sm-12">
				<div class="form-group">
					<div class="col-sm-12">
						<form method="POST" action="{{route('pos.addcart')}}">
							@csrf
							<select class="form-control select2" name="nambar" tabindex="-1" aria-hidden="true">
								@foreach($semuabarang as $value)
								<option value="{{$value->namabarang}}">{{$value->namabarang}}</option>
								@endforeach
							</select>
							<br>
							<br>
							<div class="form-group">
								<button type="submit" class="btn btn-success float-right">Tambah!</button>
							</div>
						</form>
					</div>
					<br>
					<div class="col-sm-12">
						<div class="form-group">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Stock</th>
										<th>Harga</th>
										<th>Sub total (RP.)</th>
										<th class="text-center">Opsi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($semuadata as $data)
									<tr>
										<td>{{$data->namabarang}}</td>
										<td>{{$data->stock}}</td>
										<td>{{$data->hargaakhir}}</td>
										<td>{{$data->stock * $data->hargaakhir}}</td>
										<td class="text-center">
											<a href="#" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
												Edit
											</a>
											<form action="#" method="post" class="d-inline-block">
												{{ method_field('DELETE') }}
												{{csrf_field() }}
												<button type="submit" class="btn btn-warning waves-effect">Delete
												</button>                  
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<br>
							<form method="POST" action="{{route('pos.transaksi')}}">
								@csrf
							<div class="form-group">
								<button type="submit" class="btn btn-danger float-right">
									Pembayaran!
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection