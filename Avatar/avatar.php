<div class="card" id="card">
  <div class="imagen">
    <button name="avatar" type="file" value= "" class="form-control" id="avatar">Actualizar</button>
    <img src="../singUp/imagenes/ <?=$_SESSION['avatar'];?>" alt="..." style="width:100%">
  </div>
  <div class="texto">
    <h1>Hola, <?=$_SESSION["nombre"] ;?></h1>
    <p class="mail"><b>E-mail:</b> <?= $_SESSION['email'] ;?></p>
    <p class="direccion"><b>Domicilio</b> <?=$_SESSION['calle'] . " " . $_SESSION['numdireccion'] . " " . $_SESSION['Pisodireccion'] . " " .  $_SESSION['Provincia'] . " " . $_SESSION['Ciudad'] . "  "
    . $_SESSION['codigopostal']  ;?></p>
    <p><button>Compras</button>
    <br><button>Favoritos</button>
    <br><button>Mis Datos</button>
    <br><button>Salir</button>
    </p>
  </div>
</div>
