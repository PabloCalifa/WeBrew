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
Route::get('/barriles/barriles/', 'productosController@listadoBarrilesAll');
Route::get("/barriles/barrilesbrand/{brand_id}", "productosController@listadoBarrilesMarcas");
Route::get("/barriles/barrilesstyle/{style_id}", "productosController@listadoBarrilesStyle");
Route::get("/barriles/barrilescountry/{country_id}", "productosController@listadoBarrilesCountry");
Route::get("/barriles/barrilesrecomendados/", "productosController@listadoBarrilesRecomend");
Route::get('/growlers/growlers/', 'productosController@listadoGrowlersAll');
Route::get("/growlers/growlersbrand/{brand_id}", "productosController@listadoGrowlersMarcas");
Route::get("/growlers/growlersstyle/{style_id}", "productosController@listadoGrowlersStyle");
Route::get("/growlers/growlerscountry/{country_id}", "productosController@listadoGrowlersCountry");
Route::get("/growlers/growlersrecomendados/", "productosController@listadoGrowlersRecomend");
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
Route::get('/perfil', function () {
    return view('/perfil');
});
Route::post("/perfil", 'UsuariosController@perfilUpdate');

Route::group(['middleware' => 'admin'], function () {
Route::post("/adm/admproductos", "admController@addProducto");
Route::get("/adm/admproductos", "admController@listadoProds");
Route::get("/adm/admproductos", "admController@listadoadmCat");
Route::get("/adm/admmarcas", "admController@listadoadmmarcas");
Route::get("/adm/admestilo", "admController@listadoadmestilos");
Route::get("/adm/admsegmentos", "admController@listadoadmsegmentos");
Route::get("/adm/admpaises", "admController@listadoadmPaises");
Route::post("/adm/admmarcas", "admController@addMarca");
Route::post("/adm/admpaises", "admController@addPais");
Route::post("/adm/admsegmentos", "admController@addSegmento", "admController@listadoadmsegmentos");
Route::post("/adm/admestilo", "admController@addEstilo");
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post("/home", "OrdenController@addOrder");
