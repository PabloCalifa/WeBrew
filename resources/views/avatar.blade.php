<div class="card" id="card">
  <div class="imagen">
    <button name="avatar" type="file" value= "" class="form-control" id="avatar">Actualizar</button>
    <img src="" alt="..." style="width:100%">
  </div>
  <div class="texto">
    <h1>Hola, {{ Auth::user()->name }}</h1>
    <br><button id="avatarboton">Compras</button>
    <br><button id="avatarboton">Favoritos</button>
    <br><button id="avatarboton" onclick="#"> Modificar Mis Datos</button>
    <br><button id="avatarboton" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Salir <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}</button>
              </form>
  </div>
</div>
