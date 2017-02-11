@extends('layouts.masters.main')

@section('title', ' Įkelti knygą')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1 class="text-center">Įkelti naują knygą</h1>
	<hr>

	{!! Form::open(['route' => 'books.store']) !!}
  		{{ Form::label('title', 'Knygos pavadinimas: ')}}
  		{{ Form::text('title', null, array('class' => 'form-control')) }}
  		@if($errors->has('title'))
  		<span class="help-block" style="color:red;"> {{ $errors->first('title') }}</span>
  		@endif
  		

  		{{ Form::label('releasedate', 'Išleidimo data:') }}
  		{{ Form::text('releasedate', null, array('class' => 'form-control')) }}

  		@if($errors->has('releasedate'))
  		<span class="help-block" style="color:red;"> {{ $errors->first('releasedate') }}</span>
  		@endif

  		{{ Form::label('author', 'Autorius:') }}
  		{{ Form::text('author', null, array('class' => 'form-control')) }}

  		@if($errors->has('author'))
  		<span class="help-block" style="color:red;"> {{ $errors->first('author') }}</span>
  		@endif

  		{{ Form::label('genre', 'Žanras:') }}
  		{{ Form::text('genre', null, array('class' => 'form-control')) }}

  		@if($errors->has('genre'))
  		<span class="help-block" style="color:red;"> {{ $errors->first('genre') }}</span>
  		@endif

  		{{ Form::submit('Talpinti', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;' )) }}

	{!! Form::close() !!}
	</div>
</div>


@endsection