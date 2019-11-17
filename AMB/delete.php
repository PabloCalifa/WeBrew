<br>
<br>
<?php
require_once("../singUp/pdo.php");
if($_POST){
  $id= $_POST['prod_id'];
    try {
      $query = $baseDeDatos->prepare ("DELETE FROM `dh_pruebas`.`prods`
            WHERE `prod_id` = '$id'; ");
        // var_dump($query); exit;
         $query-> execute();
         } catch (\Exception $e) {echo "no se pudo subir tu peli"; };
    };
  if($_GET){
  $prod_id= $_GET["prod_id"];
  // var_dump($serie_id); exit;

  try {
  $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = $baseDeDatos->prepare("SELECT *
      from prods
      INNER JOIN origin ON fk_origin = origin.country_id
      INNER JOIN brand ON fk_brand = brand.brand_id
      INNER JOIN cat ON fk_cat = cat.cat_id
      WHERE :id = prods.prod_id ")
  ;
  $query->bindValue(":id", $prod_id);
  $query->execute();

  // var_dump($prod_id); exit;
  $prods = $query->fetch();
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
              <div class"cuadro">
              <form class="" id="amb" action="../AMB/delete.php?prod_id=<?=$_GET["prod_id"]?>" method="post" enctype="multipart/form-data">
              <div class="titulo" style="text-align-last: center;"><h2>PRODUCTO A ELIMINAR</h2></div>
                <table class="table table-sm table-dark conteiner-fluid" >
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">CATEGORIA</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">STOCK</th>
                      <th scope="col">IBU</th>
                      <th scope="col">ALCOHOL</th>
                      <th scope="col">CAPACIDAD</th>
                      <th scope="col">MARCA</th>
                      <th scope="col">ORIGEN</th>
                      <th scope="col">DETALLE</th>
                      <th scope="col">FOTO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><?= $prods['prod_id'] ?></th>
                      <td><?= $prods['cat_name'] ?></td>
                      <td><?= $prods['prods_name'] ?></td>
                      <td><?= $prods['stock'] ?></td>
                      <td><?= $prods['ibu'] ?></td>
                      <td><?= $prods['alc'] ?></td>
                      <td><?= $prods['capacity_cm3'] ?></td>
                      <td><?= $prods['brand_name'] ?></td>
                      <td><?= $prods['country_origin'] ?></td>
                      <td><?= $prods['detail'] ?></td>
                      <td><?= $prods['picture'] ?></td>
                    </tr>
                    <input style="display:none" name="prod_id" id="prod_id" value="<?= $prods['prod_id'] ?>" >
                  </tbody>
                </table>
                <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Eliminar Producto</button>
                <br>
              </form>
              <button  class="btn" id="botones"  style="width:50%" onclick="window.location.href='../AMB/amb.php'"> Menu Productos </button>
              </div>
              <br>

            <button class="btn" id="botones" onclick="window.location.href='../AMB/brands.php'">MARCAS</button>
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
