<div class="card" id="card">
  <div class="imagen">
    <button name="avatar" type="file" value= "" class="form-control" id="avatar">Actualizar</button>
    <img src="../singUp/imagenes/ <?=$_SESSION['avatar'];?>" alt="..." style="width:100%">
  </div>
  <div class="texto">
    <h1>Hola, <?=$_SESSION["nombre"] ;?></h1>
    <br><button id="avatarboton">Compras</button>
    <br><button id="avatarboton">Favoritos</button>
    <br><button id="avatarboton" onclick="window.location.href='../perfil/misDatos.php'"> Modificar Mis Datos</button>
    <br><button id="avatarboton" onclick="window.location.href='../singUp/cerrarSesion.php'">Salir</button>
  </div>
</div>
