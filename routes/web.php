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
view()->composer('home', function ($view) {
    $theme = \Cookie::get('theme');
    if ($theme != 'dark' && $theme != 'light') {
        $theme = 'light';
    }
    $view->with('theme', $theme);
});
view()->composer('avatar', function ($view) {
    $theme = \Cookie::get('theme');
    if ($theme != 'dark' && $theme != 'light') {
        $theme = 'light';
    }
    $view->with('theme', $theme);
});
view()->composer('welcome', function ($view) {
    $theme = \Cookie::get('theme');
    if ($theme != 'dark' && $theme != 'light') {
        $theme = 'light';
    }
    $view->with('theme', $theme);
});

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
Route::get('/perfil', function () {
    return view('/perfil');
});
Route::post("/perfil", 'UsuariosController@perfilUpdate');

Route::group(['middleware' => 'admin'], function () {
  Route::get("/adm/admproductos", "admController@listadoadmCat");
  Route::get("/adm/admmarcas", "admController@listadoadmmarcas");
  Route::get("/adm/admestilo", "admController@listadoadmestilos");
  Route::get("/adm/admsegmentos", "admController@listadoadmsegmentos");
  Route::get("/adm/admpaises", "admController@listadoadmPaises");
  Route::post("/adm/admproductos", "admController@productoUpdate");
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post("/home", "OrdenController@addOrder");
