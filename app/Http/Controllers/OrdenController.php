<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\prods;
use App\brand;
use App\style;
use App\origin;
use App\cat;
use App\carrito;
use App\User;
use App\orden;
use App\ordenProducto;




class OrdenController extends Controller
{

  public function addOrder()  {
  $user = Auth::user();
  $ordenNueva = new Orden;
  $ordenNueva->user_id_ordfk = $user->id;
  $ordenNueva->total = $user->cartTotal();
  $ordenNueva->save();

foreach($user->productsInCart as $productInCart) {
  $ordenProducto = new ordenProducto();
  $ordenProducto->orden_id = $ordenNueva->orden_id;
  $ordenProducto->prod_id = $productInCart->products->id;
  $ordenProducto->precio = $productInCart->products->price;
  $ordenProducto->cant = $productInCart->cant;
  $ordenProducto->save();}

  carrito::where('user_id_fk',Auth::id())->delete();

  return redirect()->route('home');


}


}
