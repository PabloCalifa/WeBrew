<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");

try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
        from prods
        INNER JOIN origin ON fk_origin = origin.country_id
        INNER JOIN brand ON fk_brand = brand.brand_id
        INNER JOIN style ON style = style.style_id
        INNER JOIN cat ON fk_cat = cat.cat_id
        WHERE fk_cat = 1
        ORDER BY prod_id;");
$productos = [];
// var_dump($query); exit;
$query->execute();
$productos = $query->fetchAll();
// var_dump($productos); exit;
 }   catch (\Exception $e) {
 }




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Navloged/navCss.css" />
    <link rel="stylesheet" type="text/css" href="estilosproductos.css" />
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <title>We Brew</title>
    </head>
    <body>
      <?php require "../Navloged/nav.php" ?>
      <div class="espacionav"id="espacionav"> </div>
      <img src="../fotosComunes/porronescut.jpg" alt="..." id="fototitulo">
        <div class="row" id="botonesbajofoto">
          <div class="col-sm">
            <button type="button" class="btn" id="botones">TODOS</button>
          </div>
          <div class="col-sm" >
            <div class="accordion" id="accordionboton" >
              <div class="card"style="border: solid 0px;">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="botones">
                      MARCAS
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapsing" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body" >
                          <a class="nav-link active navproductos " href="#" >Corona</a>
                          <a class="nav-link navproductos" href="#">Stella Artois</a>
                          <a class="nav-link navproductos" href="#">Patagonia</a>
                          <a class="nav-link  navproductos" href="#" >Todas las marcas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
          <button type="button" class="btn" id="botones">ESTILO</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn" id="botones">PAIS</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn" id="botones">RECOMENDADOS</button>
          </div>
        </div>
        <div class="espacionav"id="espacionav"> </div>
        <!-- hack necesario para que funcione el desplegable en productos -->
        <div style="display:none"class="accordion" id="accordionExample">
        <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="hidden" aria-controls="collapseOne">
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
    <!-- FIN hack necesario para que funcione el desplegable en productos -->

        <section id="seccion">
          <div class="container">
            <div id="rowPorron"class="row">
               <div class="col-sm-12 ">
                <div id="rowIndex"class="row">
                  <?php  foreach ($productos as $producto):?>
                 <div class="col-sm-3 div-img"style="margin-bottom:1vw"  >
                   <div id="prodcontext">
                    <div id="stylefoto">
                     <a href="../productos/productos.php?prod_id=<?= $producto["prod_id"] ?>" id="linkproductos" >
                     <img id="productoventa"  class="img"  class="productoBuscado" src="../AMB/imagenes/ <?=$producto['picture'];?>" alt="Helaera Corona" style="max-width:120px;">
                    <div id="productotexto"class="text"><b> <?=$producto['prods_name'];?></b></div>
                    <div id="productotexto"class="text"> $ <?=substr($producto['price'],-10);?>,00</div>
                    </a>
                  </div>
                    <button type="button" class="btn" id="botonesagregar" >Agregar al Carrito </button>
                  </div>
                  </div>
                <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          <div class="espacio" style="padding-top:8vw"></div>
      </section>
      <?php require "../Footer/Footer.php" ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    </body>
  </html>
