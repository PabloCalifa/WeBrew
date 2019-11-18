<!DOCTYPE html>
<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");
if($_GET){
$prod_id= $_GET["prod_id"];
// var_dump($serie_id); exit;

try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
    from prods
    INNER JOIN origin ON fk_origin = origin.country_id
    INNER JOIN brand ON fk_brand = brand.brand_id
    INNER JOIN style ON style = style.style_id
    INNER JOIN segment ON segment = segment.segment_id
    INNER JOIN cat ON fk_cat = cat.cat_id
    WHERE :id = prods.prod_id ")
;
$query->bindValue(":id", $prod_id);
$query->execute();
// var_dump($serie_id); exit;

$prods = $query->fetch();
 }   catch (\Exception $e) {
 }
 try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
  from origin
        ORDER BY country_id;")
;
$countryes = [];
// var_dump($query); exit;

$query->execute();
$countryes = $query->fetchAll();
// var_dump($productos); exit;

 }   catch (\Exception $e) {
 } //fin buscarpaises//
 try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
                       from cat
                       ORDER BY cat_id;");
$categories = [];
// var_dump($query); exit;
$query->execute();
$categories = $query->fetchAll();
// var_dump($productos); exit;
 }   catch (\Exception $e) {
 } //fin buscarcategorias//
 try {
 $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $query = $baseDeDatos->prepare("SELECT *
                       from brand
                       ORDER BY brand_id;");
 $brandes = [];
 // var_dump($query); exit;
 $query->execute();
 $brandes = $query->fetchAll();
 // var_dump($productos); exit;
 }   catch (\Exception $e) {
 } //fin buscarmarcas//
 try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
                       from style
                       ORDER BY style_id;");
$styles = [];
// var_dump($query); exit;
$query->execute();
$styles = $query->fetchAll();
// var_dump($productos); exit;
 }   catch (\Exception $e) {
 } //fin estilos//
 try {
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $baseDeDatos->prepare("SELECT *
                       from segment
                       ORDER BY segment_id;");
$segments = [];
// var_dump($query); exit;
$query->execute();
$segments = $query->fetchAll();
// var_dump($productos); exit;
 }   catch (\Exception $e) {
 } //fin segmetos//

};


?>
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
    <section id="seccion">
        <div class="container">
          <br>
          <div id="rowCuadroProducto" class="row">
            <div class="espacio" style="padding-top:4vw"></div>
              <div class="col-sm-5" id="cuadroproducto">
                <h2 id="producto"> <?=$prods['prods_name']?> </h2>
                <ul style="list-style-type: none;" id="detalleproducto">
                  <li> <b>Marca:</b> <?=$prods['brand_name']?> </li>
                  <li> <b>Capacidad:</b> <?=$prods['capacity_cm3']?> cm3 </li>
                  <li> <b>Estilo:</b> <?=$prods['style_name']?> </li>
                  <li> <b>Graduación alcohólica:</b> <?=$prods['alc']?> % </li>
                  <li><b>IBU:</b> <?=$prods['ibu']?> </li>
                  <li><b>Pais de Procedencia:</b> <?=$prods['country_origin']?> </li>
                </ul>
              </div>
              <div class="col-sm-5" id="fotoproducto">
                <img class="d-block w-100" src="../AMB/imagenes/ <?=$prods['picture']?> "  alt="foto">
              </div>
              <div class=" col-sm-2" id="listaproductosybotones">
                <ul id="listacompraproducto">
                  <li class="listadocompra"><h3>$<?=$prods['price']?>,00</h3></li>
                  <div class="form-group">
                    <label for="cantidad">Cantidad
                      <select name="cantidad" id="cantidad">
                        <option>1</option> <option>2</option> <option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
                        <option>8</option><option>9</option><option>10</option>
                      </select>
                    </label>
                  </div>
                  <li class="listadocompra"><button type="button" class="btn" id="botones">Agregar al Carrito</button></li>
                  <li class="listadocompra"><button type="button" class="btn" id="botones"></i> Calcular Envío</button></li>
                </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="espacio" style="padding-top:2vw"></div>
              <div  class="container">
                <div id="rowIndex"class="row">
                  <div class="col-sm-12 "> <h3 class="section-title style2 text-center"><span>Productos relacionados</span></h3> </div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron1.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn"id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron6.png" alt="vasos termicos"><div class="">$58.00</div> <button type="button" class="btn"id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron7.png" alt="Tapas goma"><div class="">$58.00</div> <button type="button" class="btn"id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron8.png" alt="estuche latita"><div class="">$58.00</div> <button type="button" class="btn"id="botones">Agregar al Carrito </button></div>
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
