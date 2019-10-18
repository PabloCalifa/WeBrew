<!DOCTYPE html>
<?php
require_once("../singUp/users.php");
require_once("../singUp/helpers.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <link rel="stylesheet" type="text/css" href="../SingIn/SingIn.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <link rel="stylesheet" type="text/css" href="incss.css" />

    <title>We Brew</title>
  </head>
  <body>
  <?php require "../Navloged/nav.php" ?>
      <div class="">
        <img src="../fotosComunes/logowebrew.png" class="logoWeBrew" alt="...">
        <img src="../fotosComunes/maderanav.jpg" class="fondonav"alt="...">
      </div>
      <section id="seccion">
        <div id="promo" class="row">
          <div class="col-md-4 col-sm-4 col-xs-12" id="columna" >
            <a href="#" target="_blank">
              <img id="imgpromo" alt="Financiación" src="productos/Financiacion.jpg">
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12" id="columna" >
            <a href="#" target="_blank">
              <img id="imgpromo" alt="Video instructivo" src="productos/tutorial.jpg">
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12" id="columna" >
            <a href="#" target="_blank">
              <img id="imgpromo" alt="Retiro en Tienda o Envío a Domicilio"  src="productos/Retiro.jpg">
            </a>
          </div>
        </div>


        <div class="espacio" style="padding:2vw"></div>

<!-- CAROUSEL DE DESTACADOS -->
          <div  class="container ">
            <h1 class="productosMas text-center">Nuestros destacados</h1>
          </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container mt-3 text-center">
                  <div class="row text-center">
                  <div class="card" style="width: 20%;">
                    <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cerbeza Corona</h5>
                      <p class="card-text">Descripsion del producto.</p>
                      <a href="#"><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                    </div>
                  </div>
                  <div class="card" style="width: 20%;">
                    <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cerbeza Corona</h5>
                      <p class="card-text">Descripsion del producto.</p>
                      <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                    </div>
                  </div>
                  <div class="card" style="width: 20%;">
                    <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cerbeza Corona</h5>
                      <p class="card-text">Descripsion del producto.</p>
                      <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                    </div>
                  </div>
                  <div class="card" style="width: 20%;">
                    <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cerbeza Corona</h5>
                      <p class="card-text">Descripsion del producto.</p>
                      <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                    </div>
                  </div>
                  <div class="card" style="width: 20%;">
                    <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cerbeza Corona</h5>
                      <p class="card-text">Descripsion del producto.</p>
                      <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container mt-3 text-center">
              <div class="row text-center">
              <div class="card" style="width: 20%;">
                <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cerbeza Corona</h5>
                  <p class="card-text">Descripsion del producto.</p>
                  <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                </div>
              </div>
              <div class="card" style="width: 20%;">
                <img src="productos/porrones/porron4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cerbeza Corona</h5>
                  <p class="card-text">Descripsion del producto.</p>
                  <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                </div>
              </div>
              <div class="card" style="width: 20%;">
                <img src="productos/porrones/porron2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cerbeza Corona</h5>
                  <p class="card-text">Descripsion del producto.</p>
                  <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                </div>
              </div>
              <div class="card" style="width: 20%;">
                <img src="productos/porrones/porron3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cerbeza Corona</h5>
                  <p class="card-text">Descripsion del producto.</p>
                  <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                </div>
              </div>
              <div class="card" style="width: 20%;">
                <img src="productos/porrones/porron1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cerbeza Corona</h5>
                  <p class="card-text">Descripsion del producto.</p>
                  <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        <div class="espacio" style="padding-top:2vw"></div>
<!-- FIN DE CAROUSEL DE DESTACADOS -->

<!-- OFERTAS -->
<div  class="container ">
  <h1 class="productosMas text-center">Ofertas Especiales </h1>
</div>

  <div class="container">
    <div class="row">
        <div class=" card border-light card mb-3" style="max-width: 50%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="productos/especiales/packCorona.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Pack Corona</h3>
                <p class="card-text">Corona es una cerveza premium, clásica y auténtica, reconocida mundialmente por su alta calidad, su sabor distintivo e imagen. Es una cerveza que transmite tranquilidad y relajación, invitando a los consumidores a desconectarse de la monotonía diaria a través de experiencias agradables.</p>
                <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
              </div>
            </div>
          </div>
        </div>
        <div class=" card border-light card mb-3" style="max-width: 50%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="productos/especiales/stellaPack.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Pack Stella</h3>
                <p class="card-text">La cerveza belga número 1 en ventas a nivel mundial. Stella Artois tiene una rica herencia que se remonta al año 1366 en Leuven, Bélgica, y es hoy en día el estándar de oro de la calidad en más de 80 países. El arte y la ciencia de disfrutar una Stella Artois abarca desde los más selectos ingredientes hasta el preciso ritual de 9 pasos para servirla en su especialmente fabricado cáliz.</p>
                <a href="#" ><button type="button" class="btn" id="botones">Agregar al Carrito </button></a>
              </div>
            </div>
          </div>
        </div>
 </div>
</div>
<!-- FIN DE OFERTAS -->



    </section>
    <div class="espacio" style="padding-top:8vw"></div>

    <?php require "../Footer/Footer.php" ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>

  </body>
</html>
