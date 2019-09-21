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
                      <li role="presentation"class="active"><a href="#pedidos" aria-controls="pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
                      <li role="presentation"class="active"><a href="#volveracomprar" aria-controls="volveracomprar" role="tab" data-toggle="tab">Volver a comprar</a></li>
                      <li role="presentation"class="active"><a href="#pedidosencurso" aria-controls="pedidosencurso" role="tab" data-toggle="tab">Pedidos en curso</a></li>
                      <li role="presentation"class="active"><a href="#fav" aria-controls="fav" role="tab" data-toggle="tab">Favoritos</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="pedidos">
                          <h1>Tus pedidos</h1>

                      </div>
                      <div role="tabpanel" class="tab-pane" id="volveracomprar"><h1>Volver a comprar</h1></div>
                      <div role="tabpanel" class="tab-pane" id="pedidosencurso">...</div>
                      <div role="tabpanel" class="tab-pane" id="fav">...</div>
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
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  </body>
</html>
