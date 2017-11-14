<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('test', function(){
	$user = new App\User;
	$user->name = "Rick";
	$user->email = "racs_91@hotmail.com";
	$user->password = bcrypt("rick");
	$user->save();
	return $user;
});*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saludos/{nombre?}', ['as' => 'saludo', 'uses' => 'PagesController@saludos']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'PagesController@contact']);

Route::post('formContacto', 'PagesController@mensaje');

Route::resource('mensajes', 'MessagesController');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');



/*//Ruta que muestra los formularios guardados
Route::get('messages', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
//Ruta que muestra el formulario
Route::get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
//Ruta que guarda el formulario
Route::post('messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
//Ruta que muestra un formularios especifico guardado
Route::get('messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
//Ruta que muestra para editar un  formulario
Route::get('messages/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
//Ruta  para update un  formulario
Route::put('messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
//Ruta  para borrar un  formulario
Route::delete('messages/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);*/