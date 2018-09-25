@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif
		</div>
		<div class="col-md-8">
			@if (session('success'))
			<div class="alert alert-success" role="alert">
				{{ session('success') }}
			</div>
			@endif
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="card" >
				<div class="card-body">
					<h4 class="card-title">User Name</h4>
					<a href="" class="btn btn-primary">Confirm Request</a>
					<a href="" class="btn btn-danger">Delete Request</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection