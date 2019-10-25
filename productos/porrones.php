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
          <div class="col-sm">
            <button type="button" class="btn" id="botones">MARCA</button>
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
      <section id="seccion">
        <div class="container-fluid">
          <div class="row">
            <div class="col-3">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        MARCAS
                      </button>
                    </h2>
                  </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                                <ul class="nav flex-column">
                                  <li class="nav-item">
                                    <a class="nav-link active navproductos " href="#" >Corona</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link navproductos" href="#">Stella Artois</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link navproductos" href="#">Patagonia</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link  navproductos" href="#" tabindex="-1" aria-disabled="true">Todas las marcas</a>
                                  </li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        POR PAIS
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link active navproductos " href="#" >Corona</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navproductos" href="#">Stella Artois</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navproductos" href="#">Patagonia</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link  navproductos" href="#" tabindex="-1" aria-disabled="true">Todas las marcas</a>
                                </li>
                              </ul>
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ESTILOS
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link active navproductos " href="#" >Corona</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navproductos" href="#">Stella Artois</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navproductos" href="#">Patagonia</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link  navproductos" href="#" tabindex="-1" aria-disabled="true">Todas las marcas</a>
                                </li>
                              </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-9">
              <div id="rowPorron"class="row">
                 <div class="col-sm-12 ">
                  <div id="rowIndex"class="row">
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron1.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron2.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron3.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron4.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  </div>
                  <div class="espacio" style="padding:2vw"></div>
                  <div id="rowIndex"class="row">
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron5.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron6.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron7.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron8.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  </div>
                  <div class="espacio" style="padding:2vw"></div>
                  <div id="rowIndex"class="row">
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron5.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron6.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00n</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron7.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img id="productoventa"  class="img"  class="productoBuscado" src="../index/productos/porrones/porron8.png" alt="Helaera Corona"><div id="productotexto"class="text">$58.00</div> <button type="button" class="btn" id="botones">Agregar al Carrito </button></div>
                  </div>
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
