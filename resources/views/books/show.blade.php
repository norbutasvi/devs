@extends('layouts.masters.main')

 @section('title')
	Knyga: {{ $book->title }}
 @endsection

@section('content')

<div class="container">
	@if(Session::has('sekminga'))
		<div class="alert alert-info" role="alert">
		{{ Session::get('sekminga') }}
	@endif
		</div>
		<div class="text-center">
			<h1 style="text-transform: uppercase;">{{ $book->title }}</h1>
			<hr>
			Išleidimo metai: {{ $book->releasedate }}<br>
			Autorius: {{ $book->author }}<br>
			Žanras: {{ $book->genre }}
		</div>
</div>

@endsection


