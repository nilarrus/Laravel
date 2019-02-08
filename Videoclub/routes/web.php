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

Route::get('/', 'HomeController@getHome')->name('Pantalla principal');

Route::get('login',function(){

	return view('auth.login');

})->name('Login usuario');

Route::get('logout',function(){
	
})->name('Logout usuario');
Route::get('catalog','CatalogController@getIndex')->name('Listado de peliculas');
Route::get('catalog/show/{id}','CatalogController@getShow')->name('Vista detalle película{id}');
Route::get('catalog/create','CatalogController@getCreate')->name('Añadir película');
Route::get('catalog/edit/{id}','CatalogController@getEdit')->name('Modificar película');