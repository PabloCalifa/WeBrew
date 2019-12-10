<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  public function perfilUpdate(Request $req)
  {
$reglas = [
          'name' => 'required|string|max:255',
          // 'password' => 'required|string|min:6|confirmed',
          'surname' => 'required|string|max:255',
          // 'mes' => 'required|string|max:255',
          // 'ano' => 'required|string|max:255',
          // 'dia' => 'required|string|max:255',
          // 'sex' => 'required|string|max:255',
          // 'info' => 'required|int|max:1',
          // 'file' => 'required|image',
          'calle' => 'required|string|max:45',
          'calleNum' => 'required|string|max:45',
          'piso' => 'string|max:45',
          'pais' => 'required|string|max:45',
          'provincia_fk' => 'required|string|max:45',
          'ciudad' => 'required|string|max:45',
          'codigoPostal' => 'required|string|max:45',

      ];

      $mensajes = [
        "required" => "El campo :attribute es obligatorio",
        // "email" => "El campo :attribute tiene un formato incorrecto",
        "string" => "El campo :attribute debe ser un texto",
        "numeric" => "El :attribute debe ser numérico (sin guiones ni espacios)",
        // "min" => "La :attribute debe tener un mínimo de :min caracteres",
        // "mimes" => "La imagen debe ser .jpg o png",
        // "same" => "Las contraseñas no coinciden"
      ];
      $this->validate($req, $reglas, $mensajes);
          $user = Auth::user();
          $user->name = $req["nombre"];
          $user->surname = $req["surname"];
          $user->calle = $req["calle"];
          $user->calleNum = $req["calleNum"];
          $user->piso = $req["piso"];
          $user->pais = $req["pais"];
          $user->provincia_fk = $req["provincia_fk"];
          $user->ciudad = $req["ciudad"];
          $user->codigoPostal = $req["codigoPostal"];
          $user->save();
          return redirect ("/perfil");

        }








  protected function create(array $data)
  {

       $path = $data['file']->store("public");
       $nombre = basename($path);


      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'surname' => $data['surname'],
          'born_date' => $data['ano'].'-'.$data['mes'].'-'.$data['dia'],
          'sex' => $data['sex'],
          'info' => $data['info'],
          'avatar' => $nombre,

      ]);
  }
}
