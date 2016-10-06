@extends('base')

@section('title')
Please Login
@endsection

@section('content')
<form class="form-horizontal" method="post">
	{!! csrf_field() !!}
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
			<h3>Please Log In</h3>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
			<input class="form-control" type="email" name="email" placeholder="Email"></input>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
			<input class="form-control" type="password" name="password" placeholder="Password"></input>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
			<button class="btn btn-block btn-primary">Log In</button>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">test1@test.com:123456</div>
	</div>
</form>
@endsection