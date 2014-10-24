@extends('_master')

@section('title')
	Random User Generator
@stop


@section('content')

    <h3>Random User Generator</h3>

	Please enter the number of users you would like to generate.
	<br><br>

		{{ Form::open(array('url' => '/random_user', 'method' => 'GET')) }}
		<div> 
    	<fieldset>
        <legend>Creat New Random Users</legend>
		{{ Form::label('users', 'How many users you need (1~9)？') }}
		{{ Form::text('query', 0, array('size' => '5','maxlength' => '1')) }} <br>
		{{ Form::submit('Submit') }}
		</fieldset>
		</div> 
		{{ Form::close() }}

	<br><br>

 	<h2>You have generated {{ $query }} random users.</h2>

	@for ($i = 0; $i < $query; $i++)
		<br>
		<strong>Name:</strong> {{ $faker->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>DOB:</strong> {{ $faker->date }} <br>
		<strong>Phone:</strong> {{ $faker->phoneNumber }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong>Email:</strong> {{ $faker->email }} <br>
		<strong>Address:</strong> {{ $faker->streetAddress }}, {{ $faker->city }}, {{ $faker->state }} {{ $faker->postcode }}<br>
		<strong>Biosketch:</strong> {{ $faker->text }} <br>
		<br>
	<hr>
	@endfor
@stop


@section('footer')
	<a href={{url('/')}}><img id="backtohome" src=' {{ URL::asset('images/backtohome.png') }} ' alt='backtohome'></a>
@stop
