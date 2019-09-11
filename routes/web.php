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

Route::get('/', 'ClienteController@index');

Route::get('editar/{id}/', 'ClienteController@edit')->name('cliente.edit');
Route::post('update', 'ClienteController@update')->name('cliente.update');
Route::get('destroy/{id}/', 'ClienteController@destroy')->name('cliente.destroy');
Route::get('create', 'ClienteController@create')->name('cliente.create');
Route::post('store', 'ClienteController@store')->name('cliente.store');

//cotizaciones
Route::get('cotizacion/create', 'FacturaController@create')->name('cotizacion.create');
Route::post('cotizacion/store', 'FacturaController@store')->name('cotizacion.store');

//imprimir recibo
Route::get('cotizacion/exportar/{id}', 'FacturaController@exportarFactura')->name('cotizacion.exportar');