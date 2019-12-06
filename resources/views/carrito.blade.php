<?php

?>

<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/fotosComunes/webrewhead.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/navCss.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/carrito.css')}}" />
    <title>We Brew</title>
  </head>
  <body>
    @include('../nav')
    <div class="espacio" style="padding:3vw">
    </div>
        <!-- INICIO NAV -->
      <div class="container">
      <nav class="navbar justify-content-between" id="carrito">
        <a class="navbar-brand"id="carrito"><svg id="carrito" class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg> Carro de compras</a>
      </nav>
      <!-- FIN DEL NAV -->
      <!-- INICI DEL ROW -->
      <div class="row" id="carritorowproductos">
        <div class="col-sm-3">
          <div class"fechaderecepcion">
              <h5>CANTIDAD DE PRODUCTOS</h5>
              <p>{{$usuario->productosCarrito->count()}}</p>
          </div>
          </div>
        <div class="col-sm-3">
          <div class"Total">
              <h5>TOTAL</h5>
              <p>${{$total}}</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class"direccion">
              <h5>DIRECCIÓN</h5>

          </div>
        </div>
        <div class="col-sm-3 center">
          <div class"codigoPedido">
              <h5>FECHA DE ENVÍO </h5>
              <p> <?php echo(date("Y")." ".date("M")." ".date("d")); ?> </p>
          </div>
        </div>
      </div>
      <!-- FIN DEL ROW  -->
      <br> </br>
      <!-- INICIO DESCRIPCION DE PRODUCTOS -->
      <div class="row" id="rowcompras" >
        @foreach ($usuario->productosCarrito as $productoCarrito)
        <div class="col-sm-4">
          <div class"fotoproducto">
            <p> <a href="../../producto/{{$productoCarrito->urlSlug}}" id="linkproductos" >
            <img id="productoventa"  class="img"  class="productoBuscado" src="/imagenesDB/{{$productoCarrito->picture}}" alt="Helaera Corona" style="max-width:120px;">
          </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="detalleProducto">
            <br>
            <br>
              <h5 style="text-transform:uppercase"> {{$productoCarrito->prods_name}}</h5>
              <b>Cantidad:</b> {{$productoCarrito->pivot->cant}} unidades
              <br><b>Valor:</b> ${{$productoCarrito->pivot->cant * $productoCarrito->price}}
            </div>
          </div>
            <div class="col-sm-4">
              <div class="detalleProducto">
                <a href="../../producto/{{$productoCarrito->urlSlug}}" id="linkproductos" > <button class="btn" id="boton" style="width:100% " type="submit">Agregar más</button> </a>
                <form  action="<?=url("/eliminar_carrito/{$productoCarrito->id}")?>" method="post" style="margin:0px;">
                  {{csrf_field()}}
                 <a href="/carrito"> <button class="btn" id="boton"style="width:100% "type="submit" value="{{$productoCarrito->id}}">Eliminar del Carrito</button></a>
               </form>
               <button class="btn" id="boton" style="width:100% " type="submit">Ver similares</button>
            </div>
          </div>
        @endforeach
      <!-- INICI DEL ROW -->

      </div>
      <div class="row" id="carritorowproductos">
        <div class="col-sm-3">
          <div class"fechaderecepcion">
              <h5>CANTIDAD DE PRODUCTOS</h5>
              <p> {{$usuario->productosCarrito->count()}} </p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class"Total">
              <h5>TOTAL</h5>
              <p>${{$total}}</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class"direccion">
              <h5>DIRECCIÓN</h5>

          </div>
        </div>
        <div class="col-sm-3">
          <div class"codigoPedido">
              <h5>FECHA DE ENVÍO </h5>
              <p> <?php echo(date("Y")." ".date("M")." ".date("d")); ?> </p>
          </div>
        </div>
      </div>
      <br></br>

    <div class="row" id="formadepago">
        <div class="container">
              <div class="col-sm-12" id="formadepago">
                <h3>Forma de pago</h3>
                <label for="fname">Tarjetas aceptadas</label>
                  <i class="fab fa-cc-visa" style="color:white;"></i>
                  <i class="fab fa-cc-amex" style="color:white;"></i>
                  <i class="fab fa-cc-mastercard" style="color:white;"></i>
                  <i class="fab fa-cc-discover" style="color:white;"></i>
                <p>
                  Apellido y Nombre <input type="text" id="cname" name="cardname" placeholder="Apellido y Nombre">
                  <label for="ccnum">Numero de tarjeta</label>
                  <input type="text" id="cnumber" name="cnumber" placeholder="1111-2222-3333-4444">
                  <input type="text" id="cexp" name="cardexp" placeholder="Expiración MM/AA">
                  <input type="text" id="cvv" name="cvv" placeholder="CVV">
                </p>
                </div>
              </div>
            </div>
            <div class="container" id="compra">
              <input type="submit" value="Finalizar compra" class="btn" id="compra">
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  @include("../Footer")
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>
