
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " id="navbar">
  <a class="navbar-brand" href="../index/index.php"><img src="../fotosComunes/weBrewnav.png" class="miniLogoWeBrew" alt="..."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../productos/porrones.php">PORRONES</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">BARRILES</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">GROWLERS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">ARTESANALES</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">ACCESORIOS</a></li>
          </ul>
          <li><a href="../FAQ/faq.php"><i class="fas fa-question-circle"></i></a></li>
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
            <li><a href="#">Compras</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Favoritos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../perfil/perfil.php">Mis datos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
      </li>
      <li id="market"><a href="../carrito/carrito.php" > <i class="fas fa-shopping-cart"></i></a></li>
    </ul>
  </div>
</nav>
<img src="../fotosComunes/logoWeBrew.png" class="logoWeBrew" alt="...">
<img src="../fotosComunes/maderanav.jpg" class="fondonav"alt="...">
