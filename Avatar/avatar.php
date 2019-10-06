<div class="card" id="card">

  <img src="../singUp/imagenes/<?=$_SESSION['avatar'];?>" alt="..." style="width:100%">
  <p>
  <button  name="avatar" type="file" value= "" class="form-control" id="avatar" > Cambiar Foto </button>
  </p>

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
