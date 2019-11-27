    <footer>
      <div class="" style="border-bottom: solid 0.5px rgba(255,193,0,0.8); width:100%"></div>
            <div class="row" id="rowfooter">
        <div class="col">
          <h5 id="titulofooter">Acerca de</h5>
          <ul id="ulfooter">
            <li><a href="../index/index.php">We Brew</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Trending</a></li>
            <ul>
        </div>
        <div class="col">
          <h5 id="titulofooter">Ayuda</h5>
          <ul id="ulfooter">
            <li><a href="../FAQ/faq.php">Preguntas frecuentes</a></li>
            <li><a href="../FAQ/faq.php">Terminos y condiciones</a></li>
            <li><a href="../FAQ/faq.php">Métodos de costo y envío</a></li>
            <li><a href="../FAQ/faq.php">Política de devolución y cambios</a></li>
          <ul>
        </div>
        <div class="col">
          <h5 id="titulofooter">Redes Sociales</h5>
          <ul id="ulfooter">
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a> </li>
            <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
          <ul>
        </div>
        <div class="col">
          <?php if(!isset($_SESSION["email"])) : ?>
          <h5 id="titulofooter">Mi cuenta</h5>
            <ul id="ulfooter">
              <li><a href="#">Login</a></li>
              <li><a href="#">Registro</a></li>
            <ul>
          <?php else : ?>
            <h5 id="titulofooter"><?=$_SESSION["nombre"]; ?></h5>
            <ul id="ulfooter">
              <li><a href="#">Compras</a></li>
              <li><a href="#">Favoritos</a></li>
              <li><a href="../perfil/perfil.php">Mis datos</a></li>
              <li><a href="../singUp/cerrarSesion.php">Salir</a></li>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </footer>
