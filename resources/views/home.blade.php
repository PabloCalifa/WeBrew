<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/avatar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/perfil.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/navCss.css')}}" />
    <title>- - - - - We Brew- - - - - </title>
  </head>
  <body>
    @include('../nav')
    <div class="espacio" style="padding-top:5vw"></div>
    <div class="espacio" style="padding-top:100px;"></div>
      <div class="container">
        <div class="row" id="perfil">
          <div class="col-sm-8"id="perfil">
            <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist" id="perfil">
                <li role="presentation" class="active" > <a class="perfil" href="#pedidos" aria-controls="pedidos" role="tab" data-toggle="tab"> <button class="btn" id="botonesperfil">  Ordenes  </button> </a>  </li>
                <li role="presentation"><a class="perfil" href="#fav" aria-controls="fav" role="tab" data-toggle="tab"> <button class="btn" id="botonesperfil"> Favoritos</button></a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- INICIO INIDIVIDUAL TABPANE -->
              <div role="tabpanel" class="tab-pane active" id="pedidos" style="padding-top:10px">
                <!-- INICIO NAV -->
                <nav class="navbar" id="perfil">
                  <a class="navbar-brand"id="perfil">TUS ORDENES</a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                    <button class="btn" id="search" type="submit">Buscar</button>
                  </form>
                </nav>
                <!-- FIN DEL NAV -->
                <!-- INICI DEL ROW -->
                  <br> </br>
                <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                <div class="row" id="rowcompras" >
                  <div class="col">
                    <div class="espacio" style="margin-top:20px;" ></div>
                    @if (Auth::user()->orders->isNotEmpty())
                      @foreach (Auth::user()->orders as $order)
                    <div class="detalleProducto" id="detalleproducto">
                      <div class="row" id="order" >
                        <div class="col-sm-4">
                        <h5>orden:  {{ $order->orden_id }}</h5>
                        </div>
                        <div class="col-sm-4">
                          <h5>Fecha de compra: {{ $order->created_at }}</h5>
                        </div>
                        <div class="col-sm-4">
                        <h5>Valor  ${{ $order->total }}</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row" id="rowproducto" >
                        @foreach($order->productsInOrder as $productoCarrito)
                      <div class="col-sm-4">
                        <div class"fotoproducto">
                          <p> <a href="../../producto/{{$productoCarrito->products->urlSlug}}" id="linkproductos" >
                          <img id="productoventa"  class="img"  class="productoBuscado" src="/imagenesDB/{{$productoCarrito->products->picture}}" alt="Helaera Corona" style="max-width:120px;">
                        </a>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="detalleProducto">
                          <br>
                          <br>
                            <h5 style="text-transform:uppercase"> {{$productoCarrito->products->prods_name}}</h5>
                            <b>Cantidad:</b> {{$productoCarrito->cant}} unidades
                            <br><b>Valor:</b> ${{$productoCarrito->cant * $productoCarrito->products->price}}
                          </div>
                        </div>
                          <div class="col-sm-4">
                            <div class="detalleProducto">
                              <a href="../../producto/{{$productoCarrito->urlSlug}}" id="linkproductos" > <button class="btn" id="boton" style="width:100% " type="submit">Comprar nuevamente</button> </a>
                             <button class="btn" id="boton" style="width:100% " type="submit">Ver similares</button>
                          </div>
                        </div>
                      @endforeach
                        <div class="espacioEntreOrdenes" id="espacioEntreOrdenes" ></div>
                      </div>
                </div>
              @endforeach
              @else
                <p>Aún no hiciste ninguna compra</p>
              @endif
                  </div>
                </div>
                <!-- FIN DE DESCRIPCION PRODUCTOS -->
              </div>
              <!-- FIN INIDIVIDUAL TABPANE -->
              <!-- INICIO INIDIVIDUAL TABPANE -->
              <div role="tabpanel" class="tab-pane" id="fav"style="padding-top:10px;">
                <!-- INICIO NAV -->
                <nav class="navbar" id="perfil">
                  <a class="navbar-brand"id="perfil">FAVORITOS</a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-4" type="search" placeholder="Encontra tu pedido" aria-label="Search">
                    <button class="btn" id="search" type="submit">Buscar</button>
                  </form>
                </nav>
                <!-- FIN DEL NAV -->
                <br> </br>
                <!-- INICIO DESCRIPCION DE PRODUCTOS -->
                <div class="row" id="rowcompras" >
                  <div class="col">
                    <div class"fotoproducto">
                        <a href="#" ><img alt="..." class="img-responsive" src="../index/productos/porrones/porron1.PNG"></a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="detalleProducto" id="detalleproducto">
                        <a href="#" ><h4>Cerveza Corona 355 cc</h4></a>
                        <p><b>Cantidad:</b>12 unidades</p>
                        <p><b>Valor :</b>$50,00</p>
                        <button class="btn" type="submit">Comprar</button>
                        <button class="btn" type="submit">Quitar de favoritos</button>
                        <br>
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
      @include('avatar')
    </div>
  </div>
  </div>
  <div class="espacio" style="padding-top:8vw"></div>
  @include("../Footer")
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>
