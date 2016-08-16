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

Route::get('/',['middleware'=>'visitas','uses'=>'HomeController@index','as'=>'principal']);


Route::get('welcome', 'HomeController@index');

Route::get('proyecto', [
	'uses' => 'HomeController@proyectoDmf',
	'as' => 'proyecto'
]);
Route::get('proyecto_mythra', [
	'uses' => 'HomeController@proyectoMythra',
	'as' => 'proyecto_mythra'
]);
Route::get('curriculum', [
	'uses' => 'HomeController@curriculum',
	'as' => 'curriculum'
]);

Route::post('contacto', [
	'uses' => 'HomeController@contacto',
	'as' => 'contacto'
]);

Route::post('curriculum_descargado', function(App\Curriculum $curriculum, Request $request){
	$ipAddress = $_SERVER['REMOTE_ADDR'];
	if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
	    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
	}
	$curriculum->ip = $ipAddress;
	$curriculum->save();
});