<?php
session_start();


function armarRegistro($datos){
  $usuario = [
  "email" => $datos ["email"],
  "emailrep" => $datos ["emailrep"],
  "password" => password_hash($datos['password'],PASSWORD_DEFAULT),
  "dia" => $datos ["dia"],
  "mes" => $datos ["mes"],
  "ano" => $datos ["ano"],
  "Nombre" => $datos ["Nombre"],
  "apellido" => $datos ["apellido"],
  "Sexo" => $datos ["Sexo"],
  "calle" => $datos ["calle"],
  "numdireccion" => $datos ["numdireccion"],
  "Pisodireccion" => $datos ["Pisodireccion"],
  "pais" => $datos ["pais"],
  "Provincia" => $datos ["Provincia"],
  "Ciudad" => $datos ["Ciudad"],
  "codigopostal" => $datos ["codigopostal"],
  "acepterms" => $datos ["acepterms"],
  "actualizaciones"=> $datos ["actualizaciones"],
  "manteinLogued" => $datos ["manteinLogued"],
  ];
  return $usuario;
}

function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents('user.json',$archivoJson.PHP_EOL,FILE_APPEND);
}


// //Aquí comienzo a programar las funciones generales de mi sistema
function validar($datos){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="El password no puede ser blanco...";
    }elseif (!is_numeric($password)) {
        $errores['password']="El password debe ser numérico...";
    }elseif (strlen($password)<8) {
        $errores['password']="El password como mínimo debe tener 8 caracteres...";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    $nombre = trim($datos['Nombre']);
    if(empty($nombre)){
        $errores['Nombre']="El nombre no puede estar en blanco...";
    }
    $apellido = trim($datos['apellido']);
    if(empty($nombre)){
        $errores['apellido']="El apellido no puede estar en blanco...";
    }
    $calle = trim($datos['calle']);
    if(empty($nombre)){
        $errores['calle']="La calle no puede estar en blanco...";
    }
    $numdireccion = trim($datos['numdireccion']);
    if(empty($nombre)){
        $errores['numdireccion']="La altura de la calle no puede estar en blanco...";
    }
    $ciudad = trim($datos['Ciudad']);
    if(empty($nombre)){
        $errores['Ciudad']="La ciudad no puede estar en blanco...";
    }
    $ciudad = trim($datos['codigopostal']);
    if(empty($nombre)){
        $errores['codigopostal']="El código postal no puede estar en blanco...";
    }
    return $errores;
}

function validarLogin($datos){
    $errores=[];
    $email = trim($usuario['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }
    $password = trim($usuario['password']);
    if(empty($password)){
        $errores['password']="El password no puede ser blanco...";
    }elseif (!is_numeric($password)) {
        $errores['password']="El password debe ser numérico...";
    }elseif (strlen($password)<6) {
        $errores['password']="El password como mínimo debe tener 6 digitos...";
    }
    return $errores;
}


  function buscarPorEmail($email){
      $usuarios = abrirBaseDatos();
      if($usuarios !=null){
          foreach ($usuarios as  $usuario) {
              if($email === $usuario['email']){
                  return $usuario;
              }
          }
      }
      return null;
  }

  function abrirBaseDatos(){
    if(file_exists('user.json')){
        $archivoJson = file_get_contents('user.json');
        //Aquí lo que hago es generar cada array con un salto de linea, para poderlo ver ejecute aquí un dd($archivoJson)
        $archivoJson = explode(PHP_EOL,$archivoJson);
        //Aquí saco el ultimo registro, el cual está en blanco
        //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo
        array_pop($archivoJson);
        //ejecute aquí un ($archivoJson), la idea es para que verifique como se va armando el archivo

        //Aquí recorro el array y creo mi array con todos los usuarios
        foreach ($archivoJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        //Aquí retorno el array de usuarios con todos sus datos
        return $arrayUsuarios;
    }else{
        return null;
    }
}

//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($usuario,$dato){
    $_SESSION['email']=$usuario['email'];
    // $_SESSION['avatar']=$usuario['avatar'];
    if(isset($dato['recordarme'])){
        setcookie('email',$usuario['email'],time()+3600);
        setcookie('password',$dato['password'],time()+3600);
    }
}
//Con esta función controlo si el usuario se logueo o ya tenemos las cookie en la máquina
function validarUsuario(){
    if(isset($_SESSION['email'])){
        return true;
    }elseif(isset($_COOKIE['email'])){
        $_SESSION['email']=$_COOKIE['email'];
        return true;
    }else{
        return false;
    }
}




?>
