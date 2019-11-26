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

Route::get('/index/index', function () {
    return view('/index/index');
});

Route::get('/porrones/porrones', function () {
    return view('/porrones/porrones');
});

Route::get('/porrones/porrones', 'productosController@listadoPorronesAll');
Route::get('/porrones/porrones/$primaryKey/', 'productosController@listadoPorronesMarcas');



// Route::get('/porrones/porronesbrand', function () {
//     return view('/porrones/porronesbrand');
// Route::get('/porrones/porronesbrand/{$id}/', 'productosController@listadoPorronesMarcas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
