<?php
require_once("users.php");
require_once("helpers.php");
if($_POST){
 $errores = validar($_POST,$_FILES);
 if(count($errores)==0){
  $usuario = buscarPorEmail($_POST["email"]);
  if($usuario !== null){
    $errores["email"]="Usuario ya registrado";
  }else{
    $avatar = armarAvatar($_FILES);
    $registro = armarRegistro($_POST,$avatar);
    guardarRegistro($registro);
   //De no excistir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.
    header("location:../singIn/singIn.php");
    exit;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../fotosComunes/webrewhead.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="singUp.css" />
    <link rel="stylesheet" type="text/css" href="../Footer/Footer.css" />
    <link rel="stylesheet" type="text/css" href="../Nav/navCss.css" />
    <title>- - - - - We Brew- - - - - </title>

  </head>
  <body>
          <?php require "../Navloged/nav.php" ?>
            <div class="espacio" style="padding-top:3vw"></div>
            <!-- <img src="../fotosComunes/woodsfondo.jpg" alt="..." id="fotofondosingin"> -->
            <div class="container" id="singin" style="text-align: -webkit-center; padding:0px; margin:0 auto">
              <?php if(isset($errores)):?>
                <ul class="alert alert-danger">
                  <?php foreach ($errores as $value) :?>
                      <li><?=$value;?></li>
                  <?php endforeach;?>
                </ul>
              <?php endif;?>
              <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
              <form class="form-horizontal" id="singup" action="singUp.php" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                  <div class="titulo" style="text-align-last: center;"><h2>CREA TU CUENTA, ES FÁCIL Y RÁPIDO</h2></label>
                  </div>
                </div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="form-group">
                  <div class="row">
                  <div class="col">
                    <label for="email" class="col control-label">Email</label>
                  </div>
                  <div class="col">
                    <input required type="email" name="email" class="form-control" id="email" placeholder="Email" value="">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="password" class="col control-label">Contraseña</label>
                  </div>
                  <div class="col">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" value="" >
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="passwordRepeat" class="col control-label">Repetí tú contraseña</label>
                    </div>
                    <div class="col">
                      <input type="password" name="passwordRepeat" class="form-control" id="passwordRepeat" placeholder="Repetí tú contraseña" value="" >
                    </div>
                  </div>
                </div>
                <div style="display:none" class= "espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div style="display:none" class="titulo" style="text-align-last: left;"><h4>Fecha de nacimiento</h4></label>
                </div>
                <div class="form-group">
                  <label style="display:none" for="dia" class="col-sm-4 control-label">Día
                    <select style="display:none" name="dia" id="dia">
                      <option>1</option> <option>2</option> <option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
                      <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
                      <option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
                      <option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                      <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
                    </select>
                  </label>
                  <label style="display:none" for="mes" class="col-sm-4 control-label" value="">Mes
                    <select style="display:none" name="mes" id="mes">
                      <option value="1">ene</option> <option value="2">feb</option> <option value="3">mar</option> <option value="4">abr</option>
                      <option value="5">may</option> <option value="6">jun</option> <option value="7">jul</option> <option value="8">ago</option>
                      <option value="9">sep</option> <option value="10">oct</option> <option value="11">nov</option> <option value="12">dic</option>
                    </select>
                  </label>
                  <label style="display:none" for="ano" class="col-sm-4 control-label"value="">Año
                    <select style="display:none" name="ano" id="ano">
                      <option value="2001">2001</option><option value="2000">2000</option>
                      <option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option>
                      <option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option>
                      <option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option>
                      <option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option>
                      <option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option>
                      <option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option>
                      <option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option>
                      <option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option>
                      <option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option>
                      <option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option>
                      <option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option>
                      <option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option>
                      <option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option>
                      <option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
                    </select>
                  </label>
                </div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="titulo" style="text-align-last: left;"><h4>Datos Personales</h4></label></div>
                <div class="espacio" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="nombre" class="col control-label">Nombre</label>
                    </div>
                    <div class="col">
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="Apellido" class="col control-label">Apellido</label>
                    </div>
                    <div class="col">
                      <input type="text" name="apellido" class="form-control" id="Apellido" placeholder="Apellido" value="">
                    </div>
                  </div>
                </div>
                <label style="display:none"for="Sexo" class="col-sm-2 control-label">Sexo</label>
                <label style="display:none" class="radio-inline">
                  <input type="hidden" name="Sexo" value="personalizado">
                  <input type="radio" name="Sexo" id="inlineRadio1" value="mujer"> Mujer
                  <input type="radio" name="Sexo" id="inlineRadio2" value="hombre"> Hombre
                  <input type="radio" name="Sexo" id="inlineRadio3" value="personalizado"> Personalizado
                </label>
                <div class="espacio" style="display:none" style="padding-top: 20px; padding-bottom: 10px"></div>
                <div class="titulo"  style="display:none; text-align-last: left;"><h4>Dirección</h4></label></div>
                <div class="form-group">
                  <label for="direccion" style="display:none" class="col-sm-2 control-label">Calle</label>
                  <div class="col-sm-10">
                    <input type="text" name="calle" style="display:none" class="form-control" id="Calle" placeholder="Calle" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label style="display:none" for="numdireccion" class="col-sm-2 control-label">Número</label>
                  <div class="col-sm-10">
                    <input style="display:none" type="text" name="numdireccion"class="form-control" id="Numero" placeholder="Número"value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Pisodireccion" style="display:none" class="col-sm-2 control-label">Piso</label>
                  <div class="col-sm-10">
                    <input style="display:none"type="text" name="Pisodireccion"class="form-control" id="Piso" placeholder="Piso"value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dia" style="display:none" class="col-sm-offset-2 col-sm-2 control-label">País
                    <select style="display:none" name="pais" id="pais">
                      <option>Argentina</option>
                    </select>
                  </label>
                  <label style="display:none" for="Provincia" class="col-sm-offset-2 col-sm-2 control-label">Provincia
                    <select style="display:none" name="Provincia" id="Provincia">
                      <option>Buenos Aires</option>
                      <option>CABA</option>
                      <option>Catamarca</option>
                      <option>Chaco</option>
                      <option>Chubut</option>
                      <option>Córdoba</option>
                      <option>Corrientes</option>
                      <option>Entre Ríos</option>
                      <option>Formosa</option>
                      <option>Jujuy</option>
                      <option>La Pampa</option>
                      <option>La Rioja</option>
                      <option>Mendoza</option>
                      <option>Misiones</option>
                      <option>Neuquén</option>
                      <option>Río Negro</option>
                      <option>Salta</option>
                      <option>San Juan</option>
                      <option>San Luis</option>
                      <option>Santa Cruz</option>
                      <option>Santa Fe</option>
                      <option>Santiago del Estero</option>
                      <option>Tierra del Fuego</option>
                      <option>Tucumán</option>
                    </select>
                  </label>
                </div>
                <div class="form-group">
                  <label style="display:none" for="Ciudad" class="col-sm-2 control-label">Ciudad</label>
                  <div class="col-sm-10">
                    <input style="display:none" type="text" name="Ciudad"class="form-control" id="Ciudad" placeholder="Ciudad" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label style="display:none" for="Codigo Postal" class="col-sm-2 control-label">Código Postal</label>
                  <div class="col-sm-10">
                    <input style="display:none" type="text" name="codigopostal" class="form-control" id="Codigo Postal" placeholder="Código Postal" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="avatar" class="col control-label">Foto de Perfil</label>
                    </div>
                    <div class="col">
                      <input required name="avatar" type="file" value= "" class="form-control" id="avatar" >
                    </div>
                  </div>
                </div>
                <div class="espacio" style="padding-top:3vw"></div>
                <div class="form-group">
                  <div class="col-sm-offset-0 col-sm-12">
                    <div class="checkbox">
                      <label>
                        <div class="row">
                          <div class="col">
                            <input type="hidden" name="acepterms" id="acepterms" value="0">
                            <input type="checkbox" name="acepterms" id="acepterms" value="1"> Acepto <a> términos y condiciones </a>
                          </div>
                        </label>
                        <label>
                          <div class="col">
                            <input  type="hidden" name="actualizaciones" id="actualizaciones" value="0">
                            <input type="checkbox" name="actualizaciones" id="actualizaciones" value="1"> Deseo recibir actualizaciones
                          </div>
                        </label>
                        <label>
                          <div class="col">
                            <input  type="hidden" name="manteinLogued" id="manteinLogued" value="0">
                            <input type="checkbox" name="manteinLogued" id="manteinLogued" value="1"> Mantenerme Logueado
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="espacio" style="padding-top:3vw"></div>
                <div class="form-group">
                  <div class="col">
                  <button type="submit" class="btn" id="botones" name="Submit" value="Enviar" style="width:50%">Crear Cuenta</button>
                </div>
              </form>
            </div>
            </div>
            <div class="espacio" style="padding-top:3vw">
            </div>
            <?php require "../Footer/Footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    </body>
  </html>
