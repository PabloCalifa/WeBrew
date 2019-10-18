<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");
if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario==null){
        $errores['email']="Usuario no encontrado...";
      }else{
        //Desde aquí incio mi revisión a ver que ocurre con los contenidos de las variables y tratar de ver que ocurre
        //Aquí ví que el dato viene bien, es decir el password hasheado
        //dd($usuario['password']);
        //Ahora veo que trae esta variable  y noto que trae el dato correctamente
        //dd($_POST['password']);
        //Aquí estaba el error a la función password_verify, se le debe psar primero el dato no hasheado y luego el hasheado, ese fue mi error, lo habia pasado al contrario
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos...";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){
            header('location:../Perfil/perfil.php');
            exit;
          }else{
            header('location:singIn.php');
            exit;
          }
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="SingIn.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <title>- - - - - We Brew- - - - - </title>
  </head>
  <body>
          <?php require "../Navloged/nav.php" ?>
          <div class="espacio" style="padding:3vw">
          </div>
          <div class="container" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto">
            <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                  <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?>
            <form id="formulario"  class="form-horizontal" name="formLogin"    novalidate action=""  method="POST" enctype="multipart/form-data" >
              <div class="form-group">
                <div class="titulo" style="text-align-last: center" ><h2>Inicio de sesión</h2></label>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Contraseña</label>
                <div class="col-sm-10">
                  <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input name="recordarme" type="checkbox" value= "recordarme"  id="recordarme"> Recordarme
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                  <a  class="btn btn-default" href="#" >Olvidé mi contraseña</a>
                  <a  class="btn btn-default" href="../singUp/singUp.php">Crear Cuenta</a>
                </div>
              </div>
            </form>
          </div>
          </div>
          <div class="espacio" style="padding-top:3vw">
          </div>
          <?php require "../Footer/Footer.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>
