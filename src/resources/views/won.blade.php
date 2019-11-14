@extends('cocacola::layout.app')
@section('content')
<div class="card">
	<div class="card-header bg-primary text-center">
		<h1>Coca-Cola</h1>
	</div>
	<div class="card-body">
		<div class="alert alert-danger text-center">
			Hello <b>{{$got->name}} </b>! <br>
			You've won {{$got->amount}} bottle of Coca-Cola. <br>
			Please Contact with {{$siteOwner}} .
		</div>
	</div>
</div>
@endsection