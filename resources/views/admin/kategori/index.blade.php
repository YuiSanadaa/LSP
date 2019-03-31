@extends('layouts.master')
@section('content')
<div class="col-sm-12 grid-margin">
	<div class="card">
		<div class="card-body">
			<h1><center>Kategori</center></h1>
			<hr>
			<div class="col-sm-12">
				<div class="form-group">
					<a href="{{route('kategori.create')}}" class="btn btn-success float-right">Tambah Data</a>
				</div>
				<br>
				<div class="table-responsive form-group mt-4">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama Kategori</th>
								<th class="text-center">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($semuakategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$kategori->nama}}</td>
								<td class="text-center">
									<a href="{{route('kategori.edit',$kategori->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
										Edit
									</a>
									<form action="{{route('kategori.destroy', $kategori->id)}}" method="post" class="d-inline-block">
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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection