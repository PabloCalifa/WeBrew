<br>
<br>
<?php
require_once("../singUp/pdo.php");
if($_POST){
  $id = $_POST['country_id'];
  $name = $_POST['name'];
  try {
    $query = $baseDeDatos->prepare ("UPDATE origin
        SET
          `country_id` = '$id',
          `country_origin` = '$name'
          WHERE `country_id` = '$id';
        ");
      // var_dump($query); exit;
       $query-> execute(); 
       } catch (\Exception $e) {echo "no se pudo subir tu peli"; };
    }//cierre ifpost//;


  if($_GET){
  $country_id= $_GET["country_id"];
  // var_dump($brand_id); exit;
   try {
   $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query = $baseDeDatos->prepare("SELECT *
                         from origin
                         where :id = origin.country_id;");
   $query->bindValue(":id", $country_id);
   $query->execute();
   // var_dump($bran_id); exit;
   $pais = $query->fetch();
    }   catch (\Exception $e) {
    }



 };

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="amb.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <title>- - - - - We Brew- - - - - </title>

  </head>
  <body>
          <?php require "../Navloged/nav.php" ?>
            <div class="espacio" style="padding-top:3vw"></div>
            <div class="" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto"> </div>
              <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
              <form class="form-horizontal" id="amb" action="../AMB/countrymod.php?country_id=<?=$_GET["country_id"]?>" method="post" enctype="multipart/form-data">
              <div class="titulo" style="text-align-last: center;"><h2>PAIS A MODIFICAR</h2></label>
                <table class="table table-sm table-dark" >
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NOMBRE</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <th scope="row"><?= $pais['country_id'] ?></th>
                        <td><?= $pais['country_origin'] ?></td>
                      </tr>
                  </tbody>
                </table>
                <table class="table table-sm table-dark" style="width: 80%">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NOMBRE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td scope="col-sm"><input type="text" name="name"></td>
                    </tr>
                  </tbody>
                      <input style="display:none" name="country_id" id="country_id" value="<?= $pais['country_id'] ?>" >
                </table>
                <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Modificar Pais</button>
              </form>
              <br>
              <a  class="btn" id="botones"  style="width:50%" href="../AMB/countryes.php"> Menu Pais </a>
            </div>
          <div class="espacio" style="padding-top:3vw"> </div>
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
