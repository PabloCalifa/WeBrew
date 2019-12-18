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
  public function listadoProds() {
    $productos = prods::all()->get();
    $vac = compact("productos");
    return view("/adm/admproductos", $vac);
  }

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
  return view("/adm/admpaises", $vac);
  }
  public function listadoadmmarcas() {
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
    return view("/adm/admmarcas",$vac);
    }
    public function listadoadmestilos() {
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
      return view("/adm/admestilos",$vac);
      }
      public function listadoadmsegmentos() {
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
        return view("/adm/admsegmentos",$vac);
    }
    public function addProducto(Request $req)  {
      prods::create($req -> all());
      return view ("/adm/admproductos");
    }
    public function addMarca(Request $req)  {
      $nuevaMarca = new brand;
      $nuevaMarca -> brand_name = $req -> input('brand_name');
      $nuevaMarca -> save();
      return view ("/adm/admmarcas");
    }

    public function addPais(Request $req)  {
      $nuevoPais = new origin;
      $nuevoPais -> country_origin = $req -> input('country_origin');
      $nuevoPais -> save();
      return view ("/adm/admpaises");
    }
    public function addEstilo(Request $req)  {
      $nuevoEstilo = new style;
      $nuevoEstilo -> style_name = $req -> input('style_name');
      $nuevoEstilo -> save();
      return view ("/adm/admestilos");
    }
    public function addSegmento(Request $req)  {
      $nuevoSegmento = new segment;
      $nuevoSegmento -> segment_name = $req -> input('segment_name');
      $nuevoSegmento -> save();
      return view ("/adm/admsegmentos");
    }
public function destroysegmentos(){

  segment::destroy(segment_id);

  return view ("/adm/admsegmentos");
}



}
