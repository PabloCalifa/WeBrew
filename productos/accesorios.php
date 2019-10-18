<!DOCTYPE html>
<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");

?>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../SingIn/SingIn.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <link rel="stylesheet" type="text/css" href="../index/incss.css" />
    <link rel="stylesheet" type="text/css" href="../FAQ/estilosfaq.css" />
    <link rel="stylesheet" type="text/css" href="../contacto/estilocontacto.css"/>
    <link rel="stylesheet" type="text/css" href="estilosproductos.css" />
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <title>We Brew</title>
    </head>
    <body>
      <?php require "../Navloged/nav.php" ?>
      <div class="espacionav"id="espacionav"> </div>
      <img src="../fotosComunes/accesorios.jpg" alt="..." id="fototitulo">
        <div class="row" id="botonesbajofoto">
          <div class="col-sm">
            <button type="button" class="btn" id="botones">TODOS</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn" id="botones">CONSERVADORAS</button>
          </div>
          <div class="col-sm">
          <button type="button" class="btn" id="botones">GROWLERS</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn" id="botones">DESTAPADORES</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn" id="botones">RECOMENDADOS</button>
          </div>
        </div>
      <div class="espacionav"id="espacionav"> </div>
      <section id="seccion">
        <div class="container">
          <div id="rowPorron"class="row">
             <div class="col-sm-12 ">
              <div id="rowIndex"class="row">
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron1.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron2.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron3.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron4.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>

              </div>
              <div class="espacio" style="padding:2vw"></div>
              <div id="rowIndex"class="row">
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron5.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron6.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron7.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron8.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
              </div>
              <div class="espacio" style="padding:2vw"></div>
                <div id="rowIndex"class="row">
                  <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron5.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron6.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron7.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/porrones/porron8.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>                </div>
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
