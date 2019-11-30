<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provincia;

class singUpController extends Controller
{
    //
    public function listadoProvincias() {
      $provincias = provincias::All();
      $vac = compact("provincias");
      return view("/register", $vac);
    }
}
