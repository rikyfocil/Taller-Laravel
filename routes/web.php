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

Route::get('categorias', "CategoriaController@index")->name('categorias.index');
Route::get('categorias/create', "CategoriaController@create")->name('categorias.create');
Route::get('categorias/{id}/edit', "CategoriaController@edit")->name('categorias.edit');
Route::put('categorias/{id}', "CategoriaController@update")->name('categorias.update');

Route::post('categorias', "CategoriaController@store")->name('categorias.store');


Route::get('/', function () {
    return view('welcome');
});


Route::get('prueba', function(){
	return view('layouts.general');
});

Route::get('saludo/{nombre}', function($nombre){
	return "Hola " . $nombre;
});

Route::get('saludoHTML/{nombre}', function($nombre){
	return view('prueba.hola', ['n' => $nombre]);
});

Route::get('saludoJSON/{nombre}', function($nombre){
	$arreglo = [
		"Saludo" => [
			"Espaniol" => "Hola" . $nombre,
			"English" => "Hello " . $nombre
		],
		"Nombre" => $nombre,
		"langs" => ["Espaniol", "English"]
	];

	return $arreglo;
});
Auth::routes();

Route::resource('productos', 'ProductoController');
Route::get('/home', 'HomeController@index')->name('home');
