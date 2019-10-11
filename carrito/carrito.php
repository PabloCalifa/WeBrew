<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="carrito.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Navloged/navCss.css" />
    <title>- - - - - We Brew- - - - - </title>
  </head>
  <body>
          <?php require "../Navloged/nav.php" ?>
          <div class="espacio" style="padding:3vw">
          </div>
              <!-- INICIO NAV -->
            <div class="container">
            <nav class="navbar navbar-dark bg-dark justify-content-between" id="carrito">
              <a class="navbar-brand"id="carrito"><svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg> Carro de compras</a>
            </nav>
            <!-- FIN DEL NAV -->
            <!-- INICI DEL ROW -->
            <div class="row" id="carritorowproductos">
              <div class="col-sm-3">
                <div class"fechaderecepcion">
                    <h5>CANTIDAD DE PRODUCTOS</h5>
                    <p>2</p>
                </div>
                </div>
              <div class="col-sm-3">
                <div class"Total">
                    <h5>TOTAL</h5>
                    <p>$100,00</p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class"direccion">
                    <h5>DIRECCIÓN</h5>
                    <p>Calle falsa 123 <a href="#"> (otra dirección)  </a> </p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class"codigoPedido">
                    <h5>FECHA DE ENVÍO </h5>
                    <p>22 de julio de 2019</p>
                </div>
              </div>
            </div>
            <!-- FIN DEL ROW  -->
            <br> </br>
            <!-- INICIO DESCRIPCION DE PRODUCTOS -->
            <div class="row" id="rowcompras" >
              <div class="col-sm-4">
                <div class"fotoproducto">
                    <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG" style="max-width: 200px;padding-left: 5px;"></a>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="detalleProducto">
                    <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                    <p><b>Cantidad:</b>12 unidades</p>
                    <p><b>Valor:</b>$50,00</p>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Modificar cantidad</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Eliminar del Carrito</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ver similares</button>
                </div>
              </div>
            </div>
            <br> </br>
            <div class="row" id="rowcompras" >
              <div class="col-sm-4">
                <div class"fotoproducto">
                    <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron7.PNG" style="max-width: 200px;padding-left: 5px;"></a>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="detalleProducto">
                    <a href="#" ><h4>Cerveza Patagonia 355 cc</h4></a>
                    <p><b>Cantidad:</b>12 unidades</p>
                    <p><b>Valor:</b>$50,00</p>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Modificar cantidad</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Eliminar del Carrito</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ver similares</button>
                </div>
              </div>
            </div>
            <br></br>
            <!-- INICI DEL ROW -->
            <div class="row" id="carritorowproductos">
              <div class="col-sm-3">
                <div class"fechaderecepcion">
                    <h5>CANTIDAD DE PRODUCTOS</h5>
                    <p>2</p>
                </div>
                </div>
              <div class="col-sm-3">
                <div class"Total">
                    <h5>TOTAL</h5>
                    <p>$100,00</p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class"direccion">
                    <h5>DIRECCIÓN</h5>
                    <p>Calle falsa 123 <a href="#"> (otra dirección)  </a> </p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class"codigoPedido">
                    <h5>FECHA DE ENVÍO </h5>
                    <p>22 de julio de 2019</p>
                </div>
              </div>
            </div>
            <br></br>

          <div class="row" id="formadepago">
              <div class="container">
                    <div class="col-sm-12" id="formadepago">
                      <h3>Forma de pago</h3>
                      <label for="fname">Tarjetas aceptadas</label>
                      <div class="icon-container">
                        <i class="fab fa-cc-visa" style="color:white;"></i>
                        <i class="fab fa-cc-amex" style="color:white;"></i>
                        <i class="fab fa-cc-mastercard" style="color:white;"></i>
                        <i class="fab fa-cc-discover" style="color:white;"></i>
                      </div>
                      <label for="cname">Nombre en la tarjeta</label>
                      <input type="text" id="cname" name="cardname" placeholder="Apellido y Nombre">
                      <label for="ccnum">Numero de tarjeta</label>
                      <input type="text" id="cnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
                      <label for="exp">Expiración</label>
                      <input type="text" id="cexp" name="cardexp" placeholder="MM/AA">
                      <div class="row">
                        <div class="col-sm-6">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                      </div>
                    </div>
                  </div>
                  <br> </br>
                  <div class="container" id="compra">
                  <input type="submit" value="Finalizar compra" class="btn" id="compra">
                  <br> </br>
                </div>
              </div>
            </div>
            </div>
          </div>

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
