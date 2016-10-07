@extends('app.base')

@section('title')
Daftar Pelajaran
@endsection

@section('page.content')
<form class="form-horizontal" method="post">
	{!! csrf_field() !!}
	<div class="form-group">
		<div class="col-md-6 col-md-offset-3">
			<h3>Data Baru</h3>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Pelajaran</label>
		<div class="col-md-6">
			<input type="text" name="" class="form-control" required="">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-3">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		</div>
	</div>
</form>

<hr>

<h3>Daftar Pelajaran</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Pelajaran</th>
			<th>KD</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($pelajaran as $value)
		<tr>
			<td>{{ $value->pelajaran }}</td>
			<td>{{ $value->kd_count }}</td>
			<td>
				<a href="#" class="btn btn-success">Detail</a>
				<a href="#" class="btn btn-warning">Edit</a>
				<a href="#" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection