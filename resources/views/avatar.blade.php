<div class="card" id="card">
  <div class="imagen">
    <button name="avatar" type="file" value= "" class="form-control" id="avatar">Actualizar</button>
    <img src="/storage/{{ Auth::user()->avatar}}" alt="..." style="width:100%">
  </div>
  <div class="texto">
    <h1>Hola, {{ Auth::user()->name }}</h1>
    <br><button id="avatarboton">Compras</button>
    <br><button id="avatarboton">Favoritos</button>
    <br><button id="avatarboton"  onclick="window.location.href='{{ url('/perfil') }}'"> Modificar tus  Datos Personales</button>
    <br><button id="avatarboton"  onclick="window.location.href='{{ url('/perfilpassword') }}'"> Modificar tu cuenta</button>
    <br><button id="avatarboton" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Salir <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}</button>
              </form>
  </div>
</div>
