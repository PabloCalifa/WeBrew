<?php
require("../singUp/pdo.php");
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


function validarMod($datos){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];
    if(!empty($datos['email'])){
              $email = trim($datos['email']);
              if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                  $errores['email']="Email inválido...";
              }
            }
      if(!empty($datos['password'])){
                       $password = trim($datos['password']);
                       if(strlen($password)<8) {
                           $errores['password']="La contraseña como mínimo debe tener 8 caracteres";
                       }
                     }
      if(!empty($datos['password'])){
          $passwordRepeat = trim($datos['passwordRepeat']);
        if($password != $passwordRepeat){
            $errores['passwordRepeat']="Las contraseñas deben ser iguales";
          }
        }

    return $errores;
      }


function validarLogin($datos){
  require("../singUp/pdo.php");

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
  "sexo" => $datos ["sexo"],
  "calle" => $datos ["calle"],
  "numdireccion" => $datos ["numdireccion"],
  "pisodireccion" => $datos ["pisodireccion"],
  "pais" => $datos ["pais"],
  "provincia" => $datos ["provincia"],
  "ciudad" => $datos ["ciudad"],
  "codigopostal" => $datos ["codigopostal"],
  "avatar" => $avatar
  ];
  return $usuario;
}

function guardarRegistro($registro){
require("../singUp/pdo.php");
  try {
$query = $baseDeDatos->prepare ("INSERT INTO users
  VALUES (default,'$registro[email]','$registro[password]','$registro[ano]-$registro[mes]-$registro[dia]','$registro[nombre]','$registro[apellido]','$registro[sexo]',
    '$registro[calle]','$registro[numdireccion]','$registro[pisodireccion]','$registro[pais]','$registro[provincia]','$registro[ciudad]'
    ,'$registro[codigopostal]','$registro[avatar]', 'default')");
   $query-> execute();
   // var_dump($query); exit;
   } catch (\Exception $e) {echo "no se pudo subir tu peli"; };
}


function consultarpass($email){

  require("../singUp/pdo.php");

  try {
    $query = $baseDeDatos->prepare("SELECT pass FROM users WHERE email = '$email'");
      // var_dump($query); exit;
       $query->execute();
       $password = $query->fetch(PDO::FETCH_ASSOC);
     } catch (\PDOException  $e) {echo "no se pudo subir tu peli"; };
      // var_dump($e);exit;
       return $password;
       // var_dump($usuarios); exit;
       // var_dump($e); exit;


}


function armarModRegistro($datos){
  if(!empty($datos['password'])){
  password_hash($datos['password'],PASSWORD_DEFAULT);
}else{
  $password=0;
  $password = consultarpass($datos ["email"]);
  $password = $password['pass'];
  // var_dump($password);exit;
}
// var_dump($password);exit;
  $usuario = [

  "email" => $datos ["email"],
  "password" => $password,
  "nombre" => $datos ["nombre"],
  "apellido" => $datos ["apellido"],
  "calle" => $datos ["calle"],
  "numdireccion" => $datos ["numdireccion"],
  "pisodireccion" => $datos ["pisodireccion"],
  "pais" => $datos ["pais"],
  "provincia" => $datos ["provincia"],
  "ciudad" => $datos ["ciudad"],
  "codigopostal" => $datos ["codigopostal"],
  ];
  return $usuario;
}


function modificarRegistro($registro){
require("../singUp/pdo.php");
  try {
$query = $baseDeDatos->prepare ("UPDATE users
  SET
email = '$registro[email]',
pass = '$registro[password]',
nombre = '$registro[nombre]',
apellido = '$registro[apellido]',
calle = '$registro[calle]',
numdireccion = '$registro[numdireccion]',
pisodireccion = '$registro[pisodireccion]',
pais = '$registro[pais]',
provincia = '$registro[provincia]',
ciudad = '$registro[ciudad]',
codigopostal = '$registro[codigopostal]'

WHERE id =  $_SESSION[id];");

  // -- (default,'$registro[email]','$registro[password]','$registro[ano]-$registro[mes]-$registro[dia]','$registro[nombre]','$registro[apellido]','$registro[sexo]',
  // --   '$registro[calle]','$registro[numdireccion]','$registro[pisodireccion]','$registro[pais]','$registro[provincia]','$registro[ciudad]'
  // --   ,'$registro[codigopostal]','$registro[avatar]', 'default')

  // var_dump($query); exit;
   $query-> execute();
   // var_dump($query);exit;
 } catch (\PDOException $e) {echo "no se pudo subir tu peli";
};
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
  require("../singUp/pdo.php");

  try {
    $query = $baseDeDatos->prepare("SELECT * FROM users ORDER BY id;");
      // var_dump($query); exit;
      $usuarios = [];
       $query->execute();
       $usuarios = $query->fetchAll();
       return $usuarios;
       // var_dump($usuarios); exit;
       } catch (\Exception $e) {echo "no se pudo subir tu peli"; };

};

//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($usuario,$dato){

    $_SESSION['id']=$usuario['id'];
    $_SESSION['email']=$usuario['email'];
    $_SESSION['nombre']=$usuario['nombre'];
    $_SESSION['apellido']=$usuario['apellido'];
    $_SESSION['calle']=$usuario['calle'];
    $_SESSION['born_date'] = $usuario ['born_date'];
    $_SESSION['sex'] = $usuario ['sex'];
    $_SESSION['numdireccion']=$usuario['numdireccion'];
    $_SESSION['pisodireccion']=$usuario['pisodireccion'];
    $_SESSION['email']=$usuario['email'];
    $_SESSION['pais']=$usuario['pais'];
    $_SESSION['provincia']=$usuario['provincia'];
    $_SESSION['ciudad']=$usuario['ciudad'];
    $_SESSION['codigopostal']=$usuario['codigopostal'];
    $_SESSION['avatar']=$usuario['avatar'];
    if(isset($dato['recordarme'])){
        setcookie('id',$usuario['id'],time()+60);
        setcookie('email',$usuario['email'],time()+60);
        setcookie('password',$dato['password'],time()+60);
    }
};

function actualizarSesion(){

    $_SESSION['email']=$_POST['email'];
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['apellido']=$_POST['apellido'];
    $_SESSION['calle']=$_POST['calle'];
    $_SESSION['numdireccion']=$_POST['numdireccion'];
    $_SESSION['pisodireccion']=$_POST['pisodireccion'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['pais']=$_POST['pais'];
    $_SESSION['provincia']=$_POST['provincia'];
    $_SESSION['ciudad']=$_POST['ciudad'];
    $_SESSION['codigopostal']=$_POST['codigopostal'];
    $_SESSION['avatar']=$_POST['avatar'];

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
