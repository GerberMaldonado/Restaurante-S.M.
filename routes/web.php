<?php

//Ruta para el inicio de la página
Route::get('/', 'HomeController@formInicio')->name('inicio');
Route::get('principal', 'HomeController@index')->name('principal');

Route::get('empleados', 'UserController@index')->name('empleados.index');
Route::post('empleados/store', 'UserController@store')->name('empleados.store');
Route::get('empleados/crear', 'UserController@create')->name('empleados.create');
Route::get('empleados/{id}', 'UserController@show')->name('empleados.show');
Route::delete('empleados/{id}', 'UserController@destroy')->name('empleados.destroy');

Route::get('pedidos', 'PedidoController@index')->name('pedidos.index');
Route::post('pedidos/store', 'PedidoController@store')->name('pedidos.store');
Route::get('pedidos/crear', 'PedidoController@create')->name('pedidos.create');
Route::get('pedidos/{id}', 'PedidoController@show')->name('pedidos.show');
Route::delete('pedidos/{id}', 'PedidoController@destroy')->name('pedidos.destroy');

Route::get('reservaciones', 'ReservacionController@index')->name('reservaciones.index');
Route::post('reservaciones/store', 'ReservacionController@store')->name('reservaciones.store');
Route::get('reservaciones/crear', 'ReservacionController@create')->name('reservaciones.create');
Route::get('reservaciones/{id}', 'ReservacionController@show')->name('reservaciones.show');
Route::delete('reservaciones/{id}', 'ReservacionController@destroy')->name('reservaciones.destroy');

Route::get('login', 'Auth\LoginController@formLogin');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');