<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="perfil.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Navloged/navCss.css" />
    <link rel="stylesheet" type="text/css" href="../Avatar/avatar.css" />
    <title>- - - - - We Brew- - - - - </title>
  </head>
          <?php require "../Navloged/nav.php" ?>
          <div class="espacio" style="padding-top:3vw"></div>
            <div class="container">
              <div class="row" id="perfil">
                <div class="col-sm-8"id="perfil">
                  <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="perfil">
                      <li role="presentation" class="active" ><a class="perfil" href="#pedidos" aria-controls="pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
                      <li role="presentation"><a class="perfil" href="#pedidosencurso" aria-controls="pedidosencurso" role="tab" data-toggle="tab">Pedidos en curso</a></li>
                      <li role="presentation"><a class="perfil" href="#volveracomprar" aria-controls="volveracomprar" role="tab" data-toggle="tab">Volver a comprar</a></li>
                      <li role="presentation"><a class="perfil" href="#fav" aria-controls="fav" role="tab" data-toggle="tab">Favoritos</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- INICIO INIDIVIDUAL TABPANE -->
                      <div role="tabpanel" class="tab-pane active" id="pedidos" style="padding-top:10px">
                        <!-- INICIO NAV -->
                        <nav class="navbar navbar-dark bg-dark justify-content-between" id="perfil">
                          <a class="navbar-brand"id="perfil">Tus pedidos</a>
                          <form class="form-inline">
                            <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                          </form>
                        </nav>
                        <!-- FIN DEL NAV -->
                        <!-- INICI DEL ROW -->
                        <div class="row" id="perfilrowproductos" >
                          <div class="col-sm-3">
                            <div class"pedidoRealizado">
                                <h5>PEDIDOS REALIZADOS</h5>
                                <p>22 de julio de 2019</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"Total">
                                <h5>TOTAL</h5>
                                <p>$50,00</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"direccion">
                                <h5>DIRECCIÓN</h5>
                                <p>Calle falsa 123</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"codigoPedido">
                                <h5>CÓDIGO DE PEDIDO</h5>
                                <p>A0123456789</p>
                            </div>
                          </div>
                        </div>
                        <!-- FIN DEL ROW  -->
                        <br> </br>
                        <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                        <div class="row" id="rowcompras" >
                          <div class="col-sm-3">
                            <div class"fotoproducto">
                                <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG"></a>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="detalleProducto">
                                <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                                <p><b>Cantidad:</b>12 unidades</p>
                                <p><b>Fecha de arribo :</b>23 de julio de 2019</p>
                                <p><b>Valor :</b>$50,00</p>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Volver a Comprar</button>
                            </div>
                          </div>
                          <div class="row" id="rowcompras" >
                            <div class="col-sm-3">
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Pedir reembolso</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Problema con el pedido</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Evaluar compra</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Ocultar pedido</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Ver productos simiilares</button>
                            </div>
                          </div>
                        </div>
                        <!-- FIN DE DESCRIPCION PRODUCTOS -->
                      </div>
                      <!-- FIN INIDIVIDUAL TABPANE -->
                      <!-- INICIO INIDIVIDUAL TABPANE -->
                      <div role="tabpanel" class="tab-pane" id="pedidosencurso" style="padding-top:10px;">
                        <!-- INICIO NAV -->
                        <nav class="navbar navbar-dark bg-dark justify-content-between" id="perfil">
                          <a class="navbar-brand"id="perfil">Pedidos en curso</a>
                          <form class="form-inline">
                            <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                          </form>
                        </nav>
                        <!-- FIN DEL NAV -->
                        <!-- INICI DEL ROW -->
                        <div class="row" id="perfilrowproductos" >
                          <div class="col-sm-3">
                            <div class"pedidoRealizado">
                                <h5>PEDIDOS REALIZADOS</h5>
                                <p>22 de julio de 2019</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"Total">
                                <h5>TOTAL</h5>
                                <p>$50,00</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"direccion">
                                <h5>DIRECCIÓN</h5>
                                <p>Calle falsa 123</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class"codigoPedido">
                                <h5>CÓDIGO DE PEDIDO</h5>
                                <p>A0123456789</p>
                            </div>
                          </div>
                        </div>
                        <!-- FIN DEL ROW  -->
                        <br> </br>
                        <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                        <div class="row" id="rowcompras" >
                          <div class="col-sm-3">
                            <div class"fotoproducto">
                                <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG"></a>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="detalleProducto">
                                <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                                <p><b>Cantidad:</b>12 unidades</p>
                                <p><b>Fecha de arribo :</b>23 de julio de 2019</p>
                                <p><b>Valor :</b>$50,00</p>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Volver a Comprar</button>
                            </div>
                          </div>
                          <div class="row" id="rowcompras" >
                            <div class="col-sm-3">
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Pedir reembolso</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Problema con el pedido</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Evaluar compra</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Ocultar pedido</button>
                              <button class="btn btn-outline-success" style="width:100%" type="submit">Ver productos simiilares</button>
                            </div>
                          </div>
                        </div>
                        <!-- FIN DE DESCRIPCION PRODUCTOS -->
                      </div>
                      <!-- FIN INIDIVIDUAL TABPANE -->
                      <!-- INICIO INIDIVIDUAL TABPANE -->
                      <div role="tabpanel" class="tab-pane" id="volveracomprar"style="padding-top:10px;">
                        <!-- INICIO NAV -->
                        <nav class="navbar navbar-dark bg-dark justify-content-between" id="perfil">
                          <a class="navbar-brand"id="perfil">Volver a comprar</a>
                          <form class="form-inline">
                            <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                          </form>
                        </nav>
                        <!-- FIN DEL NAV -->
                        <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                        <div class="row" id="rowcompras" >
                          <div class="col-sm-4">
                            <div class"fotoproducto">
                                <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG"></a>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="detalleProducto">
                                <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                                <p><b>Cantidad:</b>12 unidades</p>
                                <p><b>Última compra:</b>22 de julio de 2019</p>
                                <p><b>Valor :</b>$50,00</p>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Volver a Comprar</button>
                                <br></br>
                            </div>
                          </div>
                        </div>
                        <!-- FIN DE DESCRIPCION PRODUCTOS -->
                      </div>
                      <!-- FIN INIDIVIDUAL TABPANE -->
                      <!-- INICIO INIDIVIDUAL TABPANE -->
                      <div role="tabpanel" class="tab-pane" id="fav"style="padding-top:10px;">
                        <!-- INICIO NAV -->
                        <nav class="navbar navbar-dark bg-dark justify-content-between" id="perfil">
                          <a class="navbar-brand"id="perfil">Favoritos</a>
                          <form class="form-inline">
                            <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                          </form>
                        </nav>
                        <!-- FIN DEL NAV -->
                        <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                        <div class="row" id="rowcompras" >
                          <div class="col-sm-4">
                            <div class"fotoproducto">
                                <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG"></a>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="detalleProducto">
                                <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                                <p><b>Cantidad:</b>12 unidades</p>
                                <p><b>Valor :</b>$50,00</p>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Comprar</button>
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Quitar de favoritos</button>

                                <br></br>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- FIN INIDIVIDUAL TABPANE -->
                    <!-- FIN TAB PANE -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                <?php require "../Avatar/avatar.php" ?>
                </div>
              </div>
            </div>
          <div class="espacio" style="padding-top:3vw"></div>
          <?php require "../Footer/Footer.php" ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>
