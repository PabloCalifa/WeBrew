<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prods;
use App\brand;
use App\style;
use App\origin;
use App\cat;



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

  public function listadoPorronesMarcas($brand_id) {
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
    $brand = prods::where("fk_cat",1)->where("fk_brand",$brand_id)->get();
    $vac = compact("productos","styles","brands","origins","brand");
    // dd($brand);
    return view("/porrones/porronesbrand", $vac);
  }

  public function listadoPorronesStyle($style_id) {
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
    $style = prods::where("fk_cat",1)->where("fk_style",$style_id)->get();
    $vac = compact("productos","styles","brands","origins","style");
    // dd($brand);
    return view("/porrones/porronesstyle", $vac);
  }

  public function listadoPorronesCountry($country_id) {
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
    $origin = prods::where("fk_cat",1)->where("fk_origin",$country_id)->get();
    $vac = compact("productos","styles","brands","origins","origin");
    // dd($brand);
    return view("/porrones/porronescountry", $vac);
  }

  public function listadoPorronesRecomend() {
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
    $ishigh = prods::where("fk_cat",1)->where("ishigh",1)->get();
    $vac = compact("productos","styles","brands","origins","ishigh");
    // dd($brand);
    return view("/porrones/porronesrecomendados", $vac);
  }


  public function listadoLatasAll() {
    $productos = prods::where("fk_cat",2)->get();
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
    return view("/latas/latas", $vac);
  }

  public function listadoLatasMarcas($brand_id) {
    $productos = prods::where("fk_cat",2)->get();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    $brand = prods::where("fk_cat",2)->where("fk_brand",$brand_id)->get();
    $vac = compact("productos","styles","brands","origins","brand");
    // dd($brand);
    return view("/latas/latasbrand", $vac);
  }

  public function listadoLatasStyle($style_id) {
    $productos = prods::where("fk_cat",2)->get();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    $style = prods::where("fk_cat",2)->where("fk_style",$style_id)->get();
    $vac = compact("productos","styles","brands","origins","style");
    // dd($brand);
    return view("/latas/latasstyle", $vac);
  }

  public function listadoLatasCountry($country_id) {
    $productos = prods::where("fk_cat",2)->get();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    $origin = prods::where("fk_cat",2)->where("fk_origin",$country_id)->get();
    $vac = compact("productos","styles","brands","origins","origin");
    // dd($brand);
    return view("/latas/latascountry", $vac);
  }

  public function listadoLatasRecomend() {
    $productos = prods::where("fk_cat",2)->get();
    $brands = $productos->map(function($prod){
      return $prod->brand;
    })->unique();
    $styles = $productos->map(function($prod){
      return $prod->style;
    })->unique();
    $origins = $productos->map(function($prod){
      return $prod->origin;
    })->unique();
    $ishigh = prods::where("fk_cat",2)->where("ishigh",1)->get();
    $vac = compact("productos","styles","brands","origins","ishigh");
    // dd($brand);
    return view("/latas/latasrecomendados", $vac);
  }

  public function productos($urlSlug) {
    $productos = prods::where("urlSlug",$urlSlug)->get();
    $vac = compact("productos");
    // dd($productos);
    return view("/producto", $vac);
  }



}
