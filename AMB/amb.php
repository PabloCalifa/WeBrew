<br>
<br>
<?php
require_once('../singUp/pdo.php');
if($_POST){
  $cat = $_POST['cat'];
  $name = $_POST['name'];
  $stock = $_POST['stock'];
  $ibu = $_POST['ibu'];
  $alc = $_POST['alc'];
  $capacity = $_POST['capacity'];
  $brand = $_POST['brand'];
  $origin = $_POST['origin'];
  $detail = $_POST['detail'];
  if (isset($_FILES)){
      if ($_FILES['picture']['error'] != 0){
      }else{
        $ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
        if ($ext =! "jpg" && $ext =! "png") {
        Echo "imagen erronea";
        }
        else { // sin error//
          $nombre = $_FILES['picture']['name'];
          $ext = pathinfo($nombre,PATHINFO_EXTENSION);
          $archivoOrigen = $_FILES['picture']['tmp_name'];
          $archivoDestino = dirname(__DIR__);
          $archivoDestino = $archivoDestino."\AMB\imagenes\ ";
          $imgprod = uniqid();
          $archivoDestino = $archivoDestino.$imgprod.".".$ext;
          //Aquí estoy copiando al servidor nuestro archivo destino creado
          move_uploaded_file($archivoOrigen,$archivoDestino);
          //Aquí estoy retornando al usuario sólo la imagen, la cual será guardada en el archivo json
          $imgprod = $imgprod.".".$ext;
        }
      }
    }
    try {
      $query = $baseDeDatos->prepare ("INSERT INTO prods
        VALUES (default,'$cat','$name','$stock','$ibu','$alc','$capacity',
          '$brand','$origin','$detail','$imgprod')");
        // var_dump($query); exit;
         $query-> execute();
         } catch (\Exception $e) {echo "no se pudo subir tu peli"; };
    }//cierre ifpost//
     ;
  try {
  $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = $baseDeDatos->prepare("SELECT *
          from prods
          INNER JOIN origin ON fk_origin = origin.country_id
          INNER JOIN brand ON fk_brand = brand.brand_id
          INNER JOIN cat ON fk_cat = cat.cat_id
          ORDER BY prod_id;");
  $productos = [];
  // var_dump($query); exit;
  $query->execute();
  $productos = $query->fetchAll();
  // var_dump($productos); exit;
   }   catch (\Exception $e) {
   }; //fin buscarproductos//
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
                <button class="btn" id="botones" onclick="window.location.href='../AMB/brands.php'">MARCAS</button>
                <button class="btn" id="botones"onclick="window.location.href='../AMB/amb.php'">PRODUCTOS</button>
                <button class="btn" id="botones" onclick="window.location.href='../AMB/countryes.php'">PAISES</button>



          <div class="espacio" style="padding-top: 20px; padding-bottom: 50px"></div>
          <form class="form-horizontal" id="amb" action="amb.php" method="get" enctype="multipart/form-data">
            <div class="titulo" style="text-align-last: center;"><h2>PRODUCTOS CARGADOS</h2></label>
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
                    <th scope="col">MODIFICAR</th>
                    <th scope="col">BORRAR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  foreach ($productos as $producto):?>
                    <tr>
                      <th scope="row"><?=$producto['prod_id'];?></th>
                      <td><?=$producto["cat_name"];?></td>
                      <td><?=$producto['prods_name'];?></td>
                      <td><?=$producto['stock'];?></td>
                      <td><?=$producto['ibu'];?></td>
                      <td><?=$producto['alc'];?></td>
                      <td><?=$producto['capacity_cm3'];?></td>
                      <td><?=$producto['brand_name'];?></td>
                      <td><?=$producto['country_origin'];?></td>
                      <td><?=$producto['detail'];?></td>
                      <td><?=$producto['picture'];?></td>
                      <td><a href="../AMB/modify.php?prod_id=<?= $producto["prod_id"] ?>"> <i class="fas fa-file-alt"></i></a></td>
                      <td><a href="../AMB/delete.php?prod_id=<?= $producto["prod_id"] ?>"> <i class="fas fa-trash"></i></a></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </form>
          </div>
            <div class="espacio" style="padding-top:3vw"></div>
            <div class="" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto"> </div>
              <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
              <form class="form-horizontal" id="amb" action="amb.php" method="post" enctype="multipart/form-data">
              <div class="titulo" style="text-align-last: center;"><h2>CARGA DE PRODUCTOS</h2></label>
                <table class="table table-sm table-dark table-hover" style="width: 80%">
                  <thead>
                    <tr>
                      <th scope=".col-sm">ID</th>
                      <th scope=".col-sm">CATEGORIA</th>
                      <th scope=".col-sm">NOMBRE</th>
                      <th scope=".col-sm">STOCK</th>
                      <th scope=".col-sm">IBU</th>
                      <th scope=".col-sm">ALCOHOL</th>
                      <th scope=".col-sm">CAPACIDAD</th>
                      <th scope=".col-sm">MARCA</th>
                      <th scope=".col-sm">ORIGEN</th>
                      <th scope=".col-sm">DETALLE</th>
                      <th scope=".col-sm">FOTO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td scope="col-sm">
                        <select name="cat" id="origin" value="">
                          <?php foreach ($categories as $category): ?>
                        <option value="<?=$category["cat_id"]?>"><?=$category["cat_name"]?></option>
                      <?php endforeach; ?>
                        </select></td>
                      <td scope="col-sm"><input type="text" name="name" ></td>
                      <td scope="col-sm"><select name="stock" id="stock" value="">
                        <?php for ($i=01; $i < 50; $i++) { ?>
              					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              				  <?php } ?></select></td>
                      <td scope="col-sm"><select name="ibu" id="ibu" value="">
                        <?php for ($i=01; $i < 30; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?></select></td>
                      <td scope="col-sm"><select name="alc" id="alc" value="">
                        <?php for ($i=1; $i < 19; $i=$i+0.1) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?></select></td>
                      <td scope="col-sm"><input type="text" name="capacity"></td>
                      <td scope="col-sm">
                        <select name="brand" id="brand" value="">
                          <?php foreach ($brandes as $brande): ?>
                        <option value="<?=$brande["brand_id"]?>"><?=$brande["brand_name"]?></option>
                      <?php endforeach; ?>
                        </select>

                      </td>
                      <td scope="col-sm">
                          <select name="origin" id="origin" value="">
                            <?php foreach ($countryes as $country): ?>
                          <option value="<?=$country["country_id"]?>"><?=$country["country_origin"]?></option>
                        <?php endforeach; ?>
                          </select>
                        <!-- <input type="text" name="origin" > -->
                      </td>
                      <td scope="col-sm"><input type="text" name="detail" ></td>
                      <td scope="col-sm"><input type="file" name="picture" id="picture" style="text-align: -webkit-center" ></td>
                    </tr>
                  </tbody>

                </table>
                <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Agregar Producto</button>
              </form>
            </div>
          <div class="espacio" style="padding-top:3vw"> </div>
          <div class="" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto"> </div>
          <?php require "../Footer/Footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    </body>
  </html>
