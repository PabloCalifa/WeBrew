<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prods;
use App\brand;
use App\style;


class productosController extends Controller
{
  public function listadoPorronesAll() {
    $productos = prods::where("fk_cat",1)->get();
    // $brands = $productos->map(function($prod){
    //   return $prod->brand;
    // })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    dd($styles);
    $vac = compact("productos","styles");
    return view("/porrones/porrones", $vac);
  }

//   $styles = $productos->map(function($prod){
//     return $prod->style;
//   })->unique();
//   dd($styles)
//   $vac = compact("productos","brands","styles");
//   return view("/porrones/porrones", $vac);
// }

  public function listadoPorronesMarcas($id) {
    $productos = brand::find($id)->get();
    $vac = compact("productos");
    return view("/porrones/porrones", $vac);
  }
}
