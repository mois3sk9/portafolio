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

Route::get('/','HomeController@index');


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

Route::get("test-email", function() {
	echo "enviando";
    Mail::send("emails.contacto", [], function($message) {
        $message->to("moi1432@gmail.com", "moises sepulveda")
        ->subject("mail de prueba");
    });
    echo "enviado";
});