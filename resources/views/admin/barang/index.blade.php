@extends('layouts.master')
@section('content')
<div class="col-sm-12 grid-margin">
	<div class="card">
		<div class="card-body">
			<h1><center>Tambah Barang</center></h1>
			<hr>
			<div class="col-sm-12">
				<div class="form-group">
					<a href="{{route('barang.create')}}" class="btn btn-success float-right">Tambah Data</a>
				</div>
				<br>
				<div class="table-responsive form-group mt-4">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Stock</th>
								<th>Kategori</th>
								<th>Unit</th>
								<th>PPN</th>
								<th>Harga Beli</th>
								<th>Harga Jual</th>
								<th>deksripsi</th>
								<th class="text-center">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
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
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection