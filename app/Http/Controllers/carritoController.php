<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\prods;
use App\brand;
use App\style;
use App\origin;
use App\cat;
use App\carrito;
use App\User;


class carritoController extends Controller
{
  public function carrito ()  {
       $usuario = Auth::user();
       $user_id_fk = Auth::id();
       // dd($user_id_fk);
       $carrito = Carrito::where("user_id_fk", "=",$user_id_fk)->get();
       $total = 0;
                 if (count($carrito)>0) {
                 $total = self::calcularTotal($carrito);
                 }
   $vac = compact("usuario", "total");
   return view ("/carrito", $vac);
     }

     public function calcularTotal($carrito){
     $total = 0;
       for ($i=0; $i < count($carrito) ; $i++) {
         $producto = prods::where("id", "=", $carrito[$i]["prod_id_fk"])
         ->first();
         $total = $total + ($carrito[$i]["cant"] * $producto["price"]);
         }
     $total = number_format((float)$total, 2, ",", "");
     return $total;
     }

   public function agregar($id_producto,$cant)  {
   $usuario = Auth::id();
   $carrito = Carrito::where("user_id_fk", "=", $user_id_fk)->where("prod_id_fk", "=", $id_producto)->first();
   if ($carrito) {
      $carrito->cant = $carrito->cant + $cant;
      $carrito->save();
    } else{
   $productoNuevo = new Carrito;
   $productoNuevo->user_id_fk = $user_id_fk;
   $productoNuevo->prod_id_fk = $id_producto;
   $productoNuevo->cant = $cant;
   $productoNuevo->save();
 }
 return redirect ("/carrito");
}

   public function agregarProducto(Request $req)  {
   $usuario = Auth::id();
   $carrito = Carrito::where("user_id_fk", "=", $usuario)->where("prod_id_fk", "=", $req["id_producto"])->first();
   if ($carrito) {
      $carrito->cant = $carrito->cant + $req["cant"];
      $carrito->save();
    } else{
   $productoNuevo = new Carrito;
   $productoNuevo->user_id_fk = $usuario;
   $productoNuevo->prod_id_fk = $req["id_producto"];
   $productoNuevo->cant = $req["cant"];
   $productoNuevo->save();
 }
 return redirect ("/carrito");
}

 public function borrarProducto($id)  {
   // dd($id);
   $user_id_fk = Auth::id();
   $producto = Carrito::where("user_id_fk", "=", $user_id_fk)
   ->where("prod_id_fk", "=", $id)->delete();
   return redirect ("/carrito");
   }

   function tomorrow($format=null)
   {
   	$format = $format ? $format:'Y-m-d H:i:s';
   	return Carbon::tomorrow()->format($format);
   }


}
