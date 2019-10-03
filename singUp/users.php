
<?php
function crearusuario(){
  $user= [];
  $user ["inputEmail1"] = $_POST["inputEmail1"];
  $user ["inputEmail2"] = $_POST["inputEmail2"];
  $password = $_POST["inputPassword"];
  $user ["dia"] = $_POST["dia"];
  $user ["mes"] = $_POST["mes"];
  $user ["ano"] = $_POST["ano"];
  $user ["Nombre"] = $_POST["Nombre"];
  $user ["apellido"] = $_POST["apellido"];
  $user ["Sexo"] = $_POST["Sexo"];
  $user ["calle"] = $_POST["calle"];
  $user ["numdireccion"] = $_POST["numdireccion"];
  $user ["Pisodireccion"] = $_POST["Pisodireccion"];
  $user ["pais"] = $_POST["pais"];
  $user ["Provincia"] = $_POST["Provincia"];
  $user ["Ciudad"] = $_POST["Ciudad"];
  $user ["codigopostal"] = $_POST["codigopostal"];
  $user ["acepterms"] = $_POST["acepterms"];
  $user ["actualizaciones"] = $_POST["actualizaciones"];
  return $user;
};

function obtenerUsuario(){
  $json = file_get_contents("users.json");
  $users = json_decode($json, true);
  return $users;
};

function userByEmail($email) {
  $users = obtenerUsuario();
  foreach ($users as $user) {
    if ($user["inputEmail1"] == $email) {
    return  $user;
  };
  };
};


?>
