<!DOCTYPE html>
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
    <title>  We Brew</title>
  </head>
  <body>
    <?php require "../Nav/nav.php" ?>
    <section id="seccion">
        <div class="container">
          <div id="rowCuadroProducto" class="row">
            <div class="espacio" style="padding-top:4vw"></div>
              <div class="col-sm-8" id="cuadroproducto">
                <h4 id="rutaproductos">Accesorios > Heladeras > Corona </h4>
                <div id="rowProducto"class="row">
                  <div class="col-sm-8" id="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="vistaProductos/heladera1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="vistaProductos/heladera2.jpg" alt="Second slide">
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
                    <!-- FIN CARROUSEL -->
                  </div>
                <div class=" col-sm-4" id="listaproductosybotones">
                <ul id="listacompraproducto">
                  <li class="listadocompra"><h2>Heladera Térmica Corona </h2>  </li>
                  <li class="listadocompra"><h3>Precio $58 </h3>  </li>
                  <div class="form-group">
                    <label for="cantidad">Cantidad
                      <select name="cantidad" id="cantidad">
                        <option>1</option> <option>2</option> <option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
                        <option>8</option><option>9</option><option>10</option>
                      </select>
                    </label>
                  </div>
                  <li class="listadocompra"> <button type="button" class="btn btn-success">Agregar al Carrito</button></li>
                  <li class="listadocompra"><button type="button" class="btn btn-info"><i class="fas fa-calculator"></i> CALCULAR ENVIO</button></li>
                </ul>
                </div>
              </div>
          </div>



        </div>
        <div class="espacio" style="padding-top:4vw"></div>
          <div class="container">
            <div id="rowtitulo"class="row">
              <h3>Detalles</h3>
            </div>
          </div>
          <div class="espacio" style="padding-top:2vw"></div>
            <div  class="container">
              <div id="rowdetalle"class="row">
                <div class="col-sm-2 "> <div class="Titulo">MARCA</div> Corona </div>
                <div class="col-sm-2 "> <div class="Titulo">MODELO</div> Heladera </div>
                <div class="col-sm-2 "> <div class="Titulo">VOLUMEN</div> 3960Ml </div>
                <div class="col-sm-2 "> <div class="Titulo">TIPO DE RECIPIENTE</div> Aluminio </div>
                <div class="col-sm-2 "> <div class="Titulo">ANCHO</div> 26 Cm </div>
                <div class="col-sm-2 "> <div class="Titulo">ALTO</div> 31 Cm </div>
              </div>
              <div class="espacio" style="padding-top:2vw"></div>
              <div  class="container">
                <div id="rowIndex"class="row">
                  <div class="col-sm-12 "> <h3 class="section-title style2 text-center"><span>Productos relacionados</span></h3> </div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/accesorios/5.png" alt="Helaera Corona"><div class="">$58.00</div> <button type="button" class="btn btn-primary">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/accesorios/6.png" alt="vasos termicos"><div class="">$58.00</div> <button type="button" class="btn btn-primary">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/accesorios/7.png" alt="Tapas goma"><div class="">$58.00</div> <button type="button" class="btn btn-primary">Agregar al Carrito </button></div>
                    <div class="col-sm-3 div-img"><img  class="img"  class="productoBuscado" src="../index/productos/accesorios/8.png" alt="estuche latita"><div class="">$58.00</div> <button type="button" class="btn btn-primary">Agregar al Carrito </button></div>
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
