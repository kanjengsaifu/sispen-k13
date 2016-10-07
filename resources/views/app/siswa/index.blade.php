@extends('app.base')

@set('kelas', App\Models\Kelas::all())

@section('title')
Daftar Siswa
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
		<label class="control-label col-md-3">NIS</label>
		<div class="col-md-6">
			<input type="text" name="nis" class="form-control" required="">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Nama</label>
		<div class="col-md-6">
			<input type="text" name="nama" class="form-control" required="">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Kelas</label>
		<div class="col-md-6">
			<select name="kelas_id" class="form-control">
				@foreach($kelas as $value)
				<option value="{{ $value->id }}">{{ $value->kelas_name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-3">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		</div>
	</div>
</form>

<hr>

<h3>Daftar Siswa</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($siswa as $value)
		<tr>
			<td>{{ $value->nis }}</td>
			<td>{{ $value->nama }}</td>
			<td>{{ $value->kelas->kelas_name }}</td>
			<td>
				<a href="#" class="btn btn-success">Detail</a>
				<a href="#" class="btn btn-warning">Edit</a>
				<a href="{{ route('app.siswa.delete', ['id' => $value->nis]) }}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection