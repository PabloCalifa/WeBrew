<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provincia;

class singUpController extends Controller
{
    //
    public function listadoProvincias() {
      $provincias = provincia::All();
      $vac = compact("provincias");
      return view("/perfil", $vac);
    }
}
