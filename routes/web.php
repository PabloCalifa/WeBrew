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
Route::get("/producto/{urlSlug}/", "productosController@productos");
Route::get('/contacto', function () {
    return view('/contacto');
});
Route::get('/faq', function () {
    return view('/faq');
});
Route::get("/carrito", "carritoController@carrito");
Route::get('/carrito', 'carritoController@carrito')->name('cart')->middleware('auth');
Route::post('/cart/{productId}', 'carritoController@agregarProducto')->name('addProductToCart');
Route::delete('/carrito/{productId}', 'carritoController@borrarProducto')->name('removeProductFromCart');
Route::get("/perfil", 'singUpController@listadoProvincias');
Route::post("/perfil", 'UsuariosController@perfilUpdate');



// Route::get("/perfilpassword", function () {
//     return view('/perfilpassword');
//   });
// Route::post("/perfilpassword", 'UsuariosController@passUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post("/home", "OrdenController@addOrder");
