@extends('layouts.app')
@section('content')
	@if(Session::has('success'))
	<div class="alert alert-success">
			{{ session('success') }}
		</div>
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
	
	@if(session('success'))
		
		<div class="alert alert-success">
			{{ session('success') }}
		</div>

	@endif
@endsection