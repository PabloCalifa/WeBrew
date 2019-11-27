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

Route::get('/porrones/porrones/', 'productosController@listadoPorronesAll');
Route::get("/porrones/porronesbrand/{brand_id}", "productosController@listadoPorronesMarcas");
Route::get("/porrones/porronesstyle/{style_id}", "productosController@listadoPorronesStyle");
Route::get("/porrones/porronescountry/{country_id}", "productosController@listadoPorronesCountry");
Route::get("/porrones/porronesrecomendados/", "productosController@listadoPorronesRecomend");
Route::get('/latas/latas/', 'productosController@listadoLatasAll');
Route::get("/latas/latasbrand/{brand_id}", "productosController@listadoLatasMarcas");
Route::get("/latas/latasstyle/{style_id}", "productosController@listadoLatasStyle");
Route::get("/latas/latascountry/{country_id}", "productosController@listadoLatasCountry");
Route::get("/latas/latasrecomendados/", "productosController@listadoLatasRecomend");
Route::get("/producto/{prod_id}/", "productosController@productos");
Route::get("/index/index/{prod_id}", "productosController@productos");





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
