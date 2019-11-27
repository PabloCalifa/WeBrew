
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " id="navbar">
  <a class="navbar-brand" href="../index/index">
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
        <a href="../porrones/porrones">GROWLERS<span class="caret"></span></a>
      </li>
      <li>
        <a href="../contacto/contacto.php">CONTACTO</a>
      </li>
    </ul>
    <form class=" form-inline my-2 my-lg-0" style="">
      <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estás buscando? " aria-label="Close">
      <button class="btn  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <ul class="nav navbar-nav navbar-right" id="Loginreg">
      <li class="dropdown">
        <?php if(!isset($_SESSION["email"])) : ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../SingIn/SingIn.php">LOGIN</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../singUp/singUp.php">REGISTRO</a></li>
        </ul>
        <?php else : ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="text-transform: uppercase">
          <?=$_SESSION["nombre"]; ?> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">COMPRAS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">FAVORITOS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../perfil/perfil.php">MIS DATOS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../singUp/cerrarSesion.php">SALIR</a></li>
          </ul>
        <?php endif; ?>
      </li>
      <li id="market"><a href="../carrito/carrito.php" > <i class="fas fa-shopping-cart"></i></a></li>
    </ul>
  </div>
</nav>
