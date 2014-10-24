<?php

// Homepage
Route::get('/', function()
{
	return View::make('index');
});

// Display the form for Lorem Ipsum Generator
Route::get('/lorem_ipsum/', function() {

	$query = Input::get('query');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($query);
	return View::make('lorem_ipsum')
		->with('query', $query)
		->with('paragraphs', $paragraphs);	
	
});


// Process the form for Lorem Ipsum Generator
Route::post('/lorem_ipsum/', function() {


});




// Display the form for Random User Generator
Route::get('/random_user/', function() {

	$query = Input::get('query');
	$faker = Faker\Factory::create();
	return View::make('random_user')
		->with('query', $query)
		->with('faker', $faker);	
	
});


// Process the form for Random User Generator
Route::post('/random_user/', function() {


});


