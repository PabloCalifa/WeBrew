
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
    @include('../nav')
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
      <form class="form-horizontal" id="amb" action="{{ url('/adm/admproductos') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
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
