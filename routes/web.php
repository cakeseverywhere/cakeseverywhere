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

Route::get('/', 'ProductosController@index')->name('inicio');

Route::get('registerProductos', 'ProductosController@vistaRegistro')->name('registarProducto');
Route::post('registerProductos', 'ProductosController@store');
Route::get('infoProductos', 'ProductosController@show');

Route::view('nosotros','informative.nosotros')->name('nosotros');

Route::view('pasteles','productos.pasteles')->name('pasteles');

Route::view('cart','productos.cart')->name('cart');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('registerDireccionesSucursales','DireccionesSucursalesController@index')->name('registrarSucursal');
Route::post('registerDireccionesSucursales','DireccionesSucursalesController@register');

