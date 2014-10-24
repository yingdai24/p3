@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop


@section('content')

    <h3>Lorem Ipsum Generator</h3>

	Please enter the number of paragraphs you would like to generate.
	<br><br>

		{{ Form::open(array('url' => '/lorem_ipsum', 'method' => 'GET')) }}
		<div> 
    	<fieldset>
        <legend>Creat New Lorem Ipsum</legend>
		{{ Form::label('paragraphs', 'How many paragraphs you need (1~9)？') }}
		{{ Form::text('query', 0, array('size' => '5','maxlength' => '1')) }} <br>
		{{ Form::submit('Submit') }}
		</fieldset>
		</div> 
		{{ Form::close() }}

	<br><br>
	
	<h2>You have generated {{ $query }} paragraphs.</h2>

	@foreach($paragraphs as $paragraph => $value)
	<p> {{ $value }} </p>
	@endforeach

@stop

@section('footer')
	<a href={{url('/')}}><img id="backtohome" src=' {{ URL::asset('images/backtohome.png') }} ' alt='backtohome'></a>
@stop
