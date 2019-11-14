@extends('cocacola::layout.app')
@section('content')
<div class="card">
	<div class="card-header bg-primary text-center">
		<h1>Coca-Cola</h1>
	</div>
	<div class="card-body">
		<form action="{{route('cocacola.post')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="name">Name : </label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Dodge That" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>
@endsection