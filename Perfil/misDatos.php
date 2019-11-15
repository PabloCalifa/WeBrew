<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");
if(!isset($_SESSION["email"])) {
  header("location:../singIn/singIn.php");
  exit;
}
if($_POST){
 $errores = validarMod($_POST);
 if(count($errores)==0){
  $usuario = buscarPorEmail($_POST["email"]);
  if($usuario !== null){
  }else{
    $registro = armarModRegistro($_POST);
    modificarRegistro($registro);
    actualizarSesion($_POST);
   //De no excistir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.
    header("location:../Perfil/misDatos.php");
    exit;
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
    <link rel="stylesheet" type="text/css" href="../perfil/misDatos.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <title>- - - - - We Brew- - - - - </title>

  </head>
  <body>
          <?php require "../Navloged/nav.php" ?>
            <div class="espacio" style="padding-top:3vw"></div>

            <!-- <img src="../fotosComunes/woodsfondo.jpg" alt="..." id="fotofondosingin"> -->
            <div class="container" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto">
              <?php if(isset($errores)):?>
                <br>
                <br>

                <ul class="alert alert-danger">
                  <?php foreach ($errores as $value) :?>
                      <li><?=$value;?></li>
                  <?php endforeach;?>
                </ul>
              <?php endif;?>
                  <br>
              <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
              <form class="form-horizontal" id="singup" action="../perfil/misDatos.php" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                  <div class="titulo" style="text-align-last: center;"><h2>TUS DATOS</h2></label>
                  </div>
                </div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="form-group">
                  <div class="row">
                  <div class="col">
                    <label for="email" class="col control-label">Email</label>
                  </div>
                  <div class="col">
                    <input required type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=$_SESSION["email"]?>">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="password" class="col control-label">Contraseña</label>
                  </div>
                  <div class="col">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" value="" >
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="passwordRepeat" class="col control-label">Repetí tú contraseña</label>
                    </div>
                    <div class="col">
                      <input type="password" name="passwordRepeat" class="form-control" id="passwordRepeat" placeholder="Repetí tú contraseña" value="" >
                    </div>
                  </div>
                </div>
                <div style="" class= "espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div style="" class="titulo" style="text-align-last: left;"><h4>Fecha de nacimiento</h4></label>
                </div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="titulo" style="text-align-last: left;"><h4>Datos Personales</h4></label></div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="nombre" class="col control-label">Nombre</label>
                    </div>
                    <div class="col">
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" value="<?=$_SESSION["nombre"]?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="Apellido" class="col control-label">Apellido</label>
                    </div>
                    <div class="col">
                      <input type="text" name="apellido" class="form-control" id="Apellido" placeholder="Apellido" value="<?=$_SESSION["apellido"]?>">
                    </div>
                  </div>
                </div>

                <div class="espacio" style="" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="titulo"  style="text-align-last: left;"><h4>Dirección</h4></label></div>
                <div class="form-group">
                  <label for="direccion" style="" class="col-sm-2 control-label">Calle</label>
                  <div class="col-sm-10">
                    <input type="text" name="calle" style="" class="form-control" id="Calle" placeholder="Calle" value="<?=$_SESSION["calle"]?>">
                  </div>
                </div>
                <div class="form-group">
                  <label style="" for="numdireccion" class="col-sm-2 control-label">Número</label>
                  <div class="col-sm-10">
                    <input style="" type="text" name="numdireccion"class="form-control" id="Numero" placeholder="Número"value="<?=$_SESSION["numdireccion"]?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pisodireccion" style="" class="col-sm-2 control-label">Piso</label>
                  <div class="col-sm-10">
                    <input style=""type="text" name="pisodireccion"class="form-control" id="Piso" placeholder="Piso"value="<?=$_SESSION["pisodireccion"]?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pais" style="" class="col-sm-4 control-label">País
                    <select style="" name="pais" id="pais">
                      <option>Argentina</option>
                    </select>
                  </label>
                  <label style="" for="provincia" class="col-sm-4 control-label">Provincia
                    <select style="" name="provincia" id="provincia" value="<?=$_SESSION["provincia"]?>">
                      <option>Buenos Aires</option>
                      <option>CABA</option>
                      <option>Catamarca</option>
                      <option>Chaco</option>
                      <option>Chubut</option>
                      <option>Córdoba</option>
                      <option>Corrientes</option>
                      <option>Entre Ríos</option>
                      <option>Formosa</option>
                      <option>Jujuy</option>
                      <option>La Pampa</option>
                      <option>La Rioja</option>
                      <option>Mendoza</option>
                      <option >Misiones</option>
                      <option>Neuquén</option>
                      <option>Río Negro</option>
                      <option>Salta</option>
                      <option>San Juan</option>
                      <option>San Luis</option>
                      <option>Santa Cruz</option>
                      <option>Santa Fe</option>
                      <option>Santiago del Estero</option>
                      <option>Tierra del Fuego</option>
                      <option>Tucumán</option>
                    </select>
                  </label>
                </div>
                <div class="form-group">
                  <label style="" for="ciudad" class="col-sm-2 control-label">Ciudad</label>
                  <div class="col-sm-10">
                    <input style="" type="text" name="ciudad"class="form-control" id="ciudad" placeholder="ciudad" value="<?=$_SESSION["ciudad"]?>">
                  </div>
                </div>
                <div class="form-group">
                  <label style="" for="Codigo Postal" class="col-sm-2 control-label">Código Postal</label>
                  <div class="col-sm-10">
                    <input style="" type="text" name="codigopostal" class="form-control" id="Codigo Postal" placeholder="Código Postal" value="<?=$_SESSION["codigopostal"]?>">
                  </div>
                </div>
                <div class="espacio" style="padding-top:3vw"></div>
                <div class="form-group">
                  <div class="col">
                  <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Modificar Datos</button>
                </div>
              </form>
              <br>
                      <div class="col">

                         <a type="" class="btn"  id="botones" style="width:50%" href="../Perfil/perfil.php"> Volver </a>
                      </div>


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
