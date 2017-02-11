@extends('layouts.masters.main')

@section('title', 'Knygos')

@section('content')

<div class="row">
	<div class="col-md-3">
		<a href="{{ route('books.create') }}" class="btn btn-lg btn-block btn-primary">Įkelti knygą</a>
	</div>
	<div class="col-md-12">
		<h1 class="text-center">Knygų sąrašas</h1>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12 text-center">
		<table class="table">
			<tbody>
			@foreach($books as $book)

			<tr class="success">
			<td><a style="list-style: none; text-transform: uppercase; color: black;" href="{{ route('books.show', $book->id)}}"><h4> {{ $book->title }}</h4></a></td>
			</tr>

			@endforeach
			</tbody>
		</table>
		<div class="text-center">
		{!! $books->links() !!}
		</div>
	</div>
</div>


@endsection
