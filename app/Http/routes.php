<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index'); 
Route::get('/Grafico', 'chartsController@index'); 
Route::get('/MapaYGrafico', 'HomeController@indexAmbos');

Route::get('ajax', function()
{
	return View::make('index');
});


Route::post('gethint', function()
{


	
	return Response::json( array(
		'resultado' => 5, 
		'sms' => " Parametro AJAX y JSON", 
		
		));

});