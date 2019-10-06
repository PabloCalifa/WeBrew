<div class="card" id="card">

  <a  href="">  <img src="../fotosComunes/img.png" alt="..." style="width:100%">  </a>
  <h1>Hola, <?=$_SESSION["Nombre"] ;?></h1>
  <p class="mail"><b>E-mail:</b> <?= $_SESSION['email'] ;?></p>
  <p class="direccion"><b>Domicilio</b> <?=$_SESSION['calle'] . " " . $_SESSION['numdireccion'] . " " . $_SESSION['Pisodireccion'] . " " .  $_SESSION['Provincia'] . " " . $_SESSION['Ciudad'] . "  "
  . $_SESSION['codigopostal']  ;?></p>
  <p><button>Compras</button>
    <br><button>Favoritos</button>
    <br><button>Mis Datos</button>
    <br><button>Salir</button>
  </p>
</div>
