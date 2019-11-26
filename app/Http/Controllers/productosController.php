<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prods;
use App\brand;
use App\style;
use App\origin;



class productosController extends Controller
{
  public function listadoPorronesAll() {
    $productos = prods::where("fk_cat",1)->get();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    // dd($origins);
    $vac = compact("productos","styles","brands","origins");
    return view("/porrones/porrones", $vac);
  }


  public function listadoPorronesMarcas($primaryKey) {
    $productos = brand::find($primaryKey)->get();
    $vac = compact("productos");
    return view("/porrones/porrones", $vac);
  }
}
