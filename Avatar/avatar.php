<div class="card" id="card">
  <div class="imagen">
    <button name="avatar" type="file" value= "" class="form-control" id="avatar">Actualizar</button>
    <img src="../singUp/imagenes/ <?=$_SESSION['avatar'];?>" alt="..." style="width:100%">
  </div>
  <div class="texto">
    <h1>Hola, <?=$_SESSION["nombre"] ;?></h1>
    <br><button id="avatarboton">Compras</button>
    <br><button id="avatarboton">Favoritos</button>
    <br><a href="../perfil/misDatos.php"><button id="avatarboton"> Modificar Mis Datos</button></a>
    <br><button id="avatarboton">Salir</button>
  </div>
</div>
