<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prods;
use App\segment;
use App\brand;
use App\style;
use App\origin;
use App\cat;
use App\carrito;
use App\User;



class admController extends Controller
{
  public function listadoadmCat() {
    $productos = prods::all();
    $segments = $productos->map(function($prod){
      return $prod->segment;
    })->unique();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    $cats = $productos->map(function($prod){
      return $prod->cat;
    })->unique();
    $vac = compact("productos","styles","brands","origins","segments","cats");
    return view("/adm/admproductos", $vac);
}
public function listadoadmPaises() {
  return view("/adm/admpaises");
  }
  public function listadoadmmarcas() {
    return view("/adm/admmarcas");
    }
    public function listadoadmestilos() {
      return view("/adm/admestilos");
      }
      public function listadoadmsegmentos() {
        return view("/adm/admsegmentos");
    }




}
