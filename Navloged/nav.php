
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " id="navbar">
  <a class="navbar-brand" href="../index/index.php"><img src="../fotosComunes/weBrewnav.png" class="miniLogoWeBrew" alt="..."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="false">PORRONES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../productos/porrones.php">TODOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/porrones.php">POR MARCA</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/porrones.php">POR ESTILO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/porrones.php">POR PAIS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/porrones.php">RECOMENDADOS</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="true">LATAS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../productos/barriles.php">TODOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR MARCA</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR ESTILO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR PAIS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">RECOMENDADOS</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="true">BARRILES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../productos/barriles.php">TODOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR MARCA</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR ESTILO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">POR PAIS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/barriles.php">RECOMENDADOS</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="false">GROWLERS<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../productos/growlers.php">TODOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/growlers.php">POR MARCA</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/growlers.php">POR ESTILO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/growlers.php">RECOMENDADOS</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="false">ACCESORIOS<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../productos/accesorios.php">TODOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/accesorios.php">CONSERVADORAS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/accesorios.php">GROWLERS</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/accesorios.php">DESTAPADORES</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../productos/accesorios.php">RECOMENDADOS</a></li>
        </ul>
      <li><a href="../contacto/contacto.php">CONTACTO</a></li>
      </li>
    </ul>
    <form class=" form-inline my-2 my-lg-0" style="">
      <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estás buscando? " aria-label="Close">
      <button class="btn  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <ul class="nav navbar-nav navbar-right" id="Loginreg">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="text-transform: uppercase">
          <?=$_SESSION["Nombre"]; ?> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">COMPRAS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">FAVORITOS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../perfil/perfil.php">MIS DATOS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">SALIR</a></li>
          </ul>
      </li>
      <li id="market"><a href="../carrito/carrito.php" > <i class="fas fa-shopping-cart"></i></a></li>
    </ul>
  </div>
</nav>
