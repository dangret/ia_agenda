<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function (){
	return View::make('template/master');
});

Route::group(['prefix'=>'api/v1'], 
	function(){
		Route::post('contacts/field-exists/{field?}/{id?}', 'ContactController@fieldExists');
		Route::resource('contacts','ContactController');
		Route::controller('img','ImgController');
	});


App::missing(function($exception){
	return View::make("error-404");
});