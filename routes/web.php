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

/*Route::get('/', function () {
    return view('inicio');
});
*/

Route::get('/', 'NotaController@index')->name('inicio');

Route::post('/agregar', 'NotaController@store')->name('store');

Route::get('/editar/{id}', 'NotaController@edit')->name('editar');

Route::put('/update/{id}', 'NotaController@update')->name('update');

Route::delete('/eliminar/{id}','NotaController@destroy')->name('eliminar');

/**Tamanhos**/

Route::get('/tamanhos', 'TamanhoController@index')->name('tamanhos');
Route::post('/agregartamanhos', 'TamanhoController@store')->name('storeTamanho');

/**Roupas **/

Route::get('/roupas', 'RoupasController@index')->name('roupas');
Route::post('/agregarroupas', 'RoupasController@store')->name('storeRoupa');

/** Pais e Ciudad */

Route::get('/pais', 'PaisController@index')->name('pais'); // localhost:8000/
Route::get('/getCiudad/{id}', 'PaisController@getCiudades')->name('getCiudad');


