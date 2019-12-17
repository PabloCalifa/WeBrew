
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required              meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/fotosComunes/webrewhead.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/navCss.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/incss.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/amb.css')}}" />
    <title>We Brew</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark " id="navbar">
      <a class="navbar-brand" href="/">
        <img src="{{URL::asset('fotosComunes/weBrewnav.png')}}" class="miniLogoWeBrew" alt="...">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto">
          <li class="">
            <a href="../porrones/porrones">PORRONES<span class="caret"></span></a>
          </li>
          <li class="">
            <a href="../latas/latas">LATAS<span class="caret"></span></a>
          </li>
          <li class="dropdown">
            <a href="../porrones/porrones">BARRILES<span class="caret"></span></a>
          </li>
          <li class="dropdown">
            <a href="url('../porrones/porrones')">GROWLERS<span class="caret"></span></a>
          </li>
          <li class="dropdown">
            <a href="url('/adm/admproductos')">TABLAS DE CARGA<span class="caret"></span></a>
          </li>
          <li>
            <a href="../contacto">CONTACTO</a>
          </li>
        </ul>
        <form class=" form-inline my-2 my-lg-0" style="">
          <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estás buscando? " aria-label="Close">
          <button class="btn  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right" id="Loginreg">
          <li class="dropdown">
          @if (Auth::guest())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/login') }}">LOGIN</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('/register') }}">REGISTRO</a></li>
            </ul>
          @else
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="text-transform: uppercase">
              {{ Auth::user()->name }} <span class="caret"></span> </a>
              <ul class="dropdown-menu">
                <li><a href="#">COMPRAS</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">FAVORITOS</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ url('/home') }}">MIS DATOS</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">SALIR</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>

               </li>
              </ul>
            @endif
          </li>
          @if (Auth::guest())
            <li id="market"><a href="{{ url('/login') }}"> <i class="fas fa-shopping-cart"></i></a></li>
          @else
          <li id="market"><a href="../carrito" > <i class="fas fa-shopping-cart"></i></a></li>
          @endif

        </ul>
      </div>
    </nav>

  <br>
  <div class="cuadro">
      <div class="titulo" style="text-align-last: center;"><h2>TABLAS</h2></div>
    <div class="row" id="tablas" style="padding-left:2%; padding-right:2%;">
      <div class="col-sm">
        <a href= "/adm/admmarcas"><button class="btn" id="botones" onclick="/adm/admmarcas">MARCAS</button></a>

      </div>
      <div class="col-sm">
        <a href="/adm/admproductos"><button class="btn" id="botones"onclick="">PRODUCTOS</button>
      </div></a>

      <div class="col-sm">
        <a href="/adm/admpaises"><button class="btn" id="botones" onclick="">PAISES</button></a>
      </div>
      <div class="col-sm">
        <a href="/adm/admestilo"><button class="btn" id="botones" onclick""=>ESTILOS</button></a>
      </div>
      <div class="col-sm">
        <a href="/adm/admsegmentos"><button class="btn" id="botones" onclick="">SEGMENTOS</button></a>
      </div>
    </div>
  </div>
  <div class="espacio" style="padding-top: 20px; padding-bottom: 20px"></div>

  </div>
  </div>
    <div class="espacio" style="padding-top:3vw"></div>
    <div class="" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto"> </div>
      <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
      <div class="cuadro">
      <form class="form-horizontal" id="amb" action="amb.php" method="post" enctype="multipart/form-data">
      <div class="titulo" style="text-align-last: center;"><h2>CARGA DE PRODUCTOS</h2></div>
      <br>
      <div class="container">
        <div class="row" id="rowcarga" >
          <div class="col-sm" id="colcarga">
            NOMBRE
          </div>
          <div class="col-sm" id="colcarga">
            <input type="text" name="name" >
          </div>
          <div class="col-sm" id="colcarga">
            CATEGORIA
          </div>
          <div class="col-sm" id="colcarga">
            <select name="cat" id="origin" value="">
              @foreach ($cats as $categoriaproducto)
                <option value="{{$categoriaproducto->cat_id}}">{{$categoriaproducto->cat_name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br>
        <div class="row" id="rowcarga" >
          <div class="col-sm" id="colcarga">
            SEGMENTO
          </div>
          <div class="col-sm" id="colcarga">
            <select name="segment" id="segment" value="">
              @foreach ($segments as $segmentoproducto)
                <option value="{{$segmentoproducto->segment_id}}">{{$segmentoproducto->segment_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-sm" id="colcarga">
            ESTILO
          </div>
          <div class="col-sm" id="colcarga">
            <select name="style" id="style" value="">
              @foreach ($styles as $estiloproducto)
                <option value="{{$estiloproducto->style_id}}">{{$estiloproducto->style_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br>
        <div class="row" id="rowcarga" >
          <div class="col-sm" id="colcarga">
            STOCK
          </div>
          <div class="col-sm" id="colcarga">
          <select name="stock" id="stock" value="">
              @for ($i=01; $i < 50; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
              @endfor
          </select>


          </div>
          <div class="col-sm" id="colcarga">
            IBU
          </div>
          <div class="col-sm" id="colcarga">
            <select name="ibu" id="ibu" value="">
                  @for ($i=01; $i < 100; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
              </select>
          </div>
          <div class="col-sm" id="colcarga">
            ALCOHOL
          </div>
          <div class="col-sm" id="colcarga">

              <select name="alc" id="alc" value="">
                    @for ($i=1; $i < 19; $i=$i+0.1)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
          </div>
        </div>
        <br>
        <div class="row" id="rowcarga" >
          <div class="col-sm" id="colcarga">
            CAPACIDAD
          </div>
          <div class="col-sm" id="colcarga">
            <input type="text" name="capacity">
          </div>
          <div class="col-sm" id="colcarga">
            MARCA
          </div>
          <div class="col-sm" id="colcarga">
            <select name="brands" id="brand" value="">
              @foreach ($brands as $marcaproducto)
                <option value="{{$marcaproducto->brand_id}}">{{$marcaproducto->brand_name}}</option>
              @endforeach

            </select>
          </div>
        </div>
        <br>
        <div class="row" id="rowcarga" >
          <div class="col-sm" id="colcarga">
            ORIGEN
          </div>
          <div class="col-sm" id="colcarga">
            <select name="origin" id="origin" value="">
              @foreach ($origins as $paisproducto)
                <option value="{{$paisproducto->country_id}}">{{$paisproducto->country_origin}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-sm" id="colcarga">
            DETALLE
          </div>
          <div class="col-sm" id="colcarga">
            <input type="text" name="detail">
          </div>
        </div>
        <br>
        <div class="row" id="rowcarga">
            <div class="col-sm" id="colcarga">
              FOTO
            </div>
            <div class="col-sm" id="colcarga">
                <input type="file" name="picture" id="picture" class="inputfile" >
            </div>
            <div class="col-sm" id="colcarga">
              DESTACADO
            </div>
            <div class="col-sm" id="colcarga">
              <select name="ishigh" id="ishigh" value="">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
        </div>
        <div class="col-sm" id="colcarga">
          PRECIO
        </div>
        <div class="col-sm" id="colcarga">
          <input type="text" name="price">
        </div>
      </div>
      <br>
      <br>
        <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Agregar Producto</button>
      </form>
    </div>
  </div>
</div>

  <div class="espacio" style="padding-top:3vw"> </div>
  <div class="" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto"> </div>
<!-- FIN DE OFERTAS -->

      <div class="espacio" style="padding-top:8vw"></div>
    @include("../Footer")
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>

  </body>
</html>
