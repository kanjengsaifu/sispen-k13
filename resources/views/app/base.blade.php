@extends('base')

@section('content')
<div class="row">
	<div class="col-md-3">
		@include('layouts.leftmenu')
	</div>
	<div class="col-md-9">
		@section('page.content')
		@show
	</div>
</div>
@endsection