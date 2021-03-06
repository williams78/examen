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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('password/change', 'Auth\ChangePasswordController@showChangePasswordForm')->name('password.change');
Route::post('password/change', 'Auth\ChangePasswordController@change')->name('password.change.post');
Route::get('/exportar', 'UserController@export');
Route::get('imprimir', 'UserController@imprimir')->name('imprimir');


Route::group(['middleware'=>['auth']], function(){
	Route::resource('roles','RoleController');
	Route::resource('users','UserController');
	Route::resource('products','ProductController');
	Route::resource('permission','PermisosController');
	Route::resource('clientes','ClientesController');
	Route::resource('proveedores','ProveedoresController');
});