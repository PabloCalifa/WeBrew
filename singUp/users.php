<?php
session_start();

// //Aquí comienzo a programar las funciones generales de mi sistema
function validar($datos,$imagen){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }
    $password = trim($datos['password']);
    if(strlen($password)<8) {
        $errores['password']="El password como mínimo debe tener 8 caracteres...";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    if(isset($_FILES)){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    if($imagen['avatar']['error']!=0){
        $errores['avatar']="Debes subir tu foto...";
    }elseif ($ext != "jpg" && $ext != "png") {
        $errores['avatar']="Formato inválido";
    }
  }
return $errores;
}


function validarLogin($datos){
    $errores=[];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="El password no puede ser blanco...";
      }elseif (strlen($password)<6) {
        $errores['password']="El password como mínimo debe tener 6 digitos...";
    }
    return $errores;
}

function validarOlvidePassword($datos){
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
    }elseif (strlen($password)<6) {
        $errores['password']="El password como mínimo debe tener 6 caracteres...";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    return $errores;
}


function armarRegistro($datos,$avatar){
  $usuario = [
  "email" => $datos ["email"],
  "password" => password_hash($datos['password'],PASSWORD_DEFAULT),
  "dia" => $datos ["dia"],
  "mes" => $datos ["mes"],
  "ano" => $datos ["ano"],
  "nombre" => $datos ["nombre"],
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
  "avatar" => $avatar
  ];
  return $usuario;
}

function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents('user.json',$archivoJson.PHP_EOL,FILE_APPEND);
}

//Esta función nos permite armar el registro cuando el usuario selecciona el avatar




function armarAvatar($imagen){
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."\singUp\imagenes\ ";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    //Aquí estoy copiando al servidor nuestro archivo destino creado
    move_uploaded_file($archivoOrigen,$archivoDestino);
    //Aquí estoy retornando al usuario sólo la imagen, la cual será guardada en el archivo json
    $avatar = $avatar.".".$ext;
    return $avatar;
}



//Función que nos permite buscar por email, a ver si el usuario existe o no en nuestra base de datos, que ahorita es un archivo json.
function buscarPorEmail($email){
    $usuarios = abrirBaseDatos();
          foreach ($usuarios as $usuario) {
            if($usuario['email'] == $email){
                return $usuario;
            }
        }
    return null;
}

function abrirBaseDatos(){
   if(file_exists('../singUp/user.json')){
       $archivoJson = file_get_contents('../singUp/user.json');
       $archivoJson = explode(PHP_EOL,$archivoJson);
       array_pop($archivoJson);
       foreach ($archivoJson as $usuarios) {
           $arrayUsuarios[]= json_decode($usuarios,true);
       }
       return $arrayUsuarios;
   }else{
       return null;
   }
}

//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($usuario,$dato){
    $_SESSION['email']=$usuario['email'];
    $_SESSION['nombre']=$usuario['nombre'];
    $_SESSION['apellido']=$usuario['apellido'];
    $_SESSION['calle']=$usuario['calle'];
    $_SESSION["dia"] = $usuario ["dia"];
    $_SESSION["mes"] = $usuario ["mes"];
    $_SESSION["ano"] = $usuario ["ano"];
    $_SESSION["Sexo"] = $usuario ["Sexo"];
    $_SESSION['numdireccion']=$usuario['numdireccion'];
    $_SESSION['Pisodireccion']=$usuario['Pisodireccion'];
    $_SESSION['email']=$usuario['email'];
    $_SESSION['pais']=$usuario['pais'];
    $_SESSION['Provincia']=$usuario['Provincia'];
    $_SESSION['Ciudad']=$usuario['Ciudad'];
    $_SESSION['codigopostal']=$usuario['codigopostal'];
    $_SESSION['avatar']=$usuario['avatar'];
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

function cambiarFoto(){
  if(isset($_FILES)){
  $nombre = $imagen['avatar']['name'];
  $ext = pathinfo($nombre,PATHINFO_EXTENSION);
  if($imagen['avatar']['error']!=0){
      $errores['avatar']="Debes subir tu foto...";
  }elseif ($ext != "jpg" && $ext != "png") {
      $errores['avatar']="Formato inválido";
  }
}


}


?>
