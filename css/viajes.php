<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/viajes.css">
    <title>Viajes</title>
  </head>

  <?php
  require_once ("header.php");
  ?>
  <body>
  <main>
    <div class="titulo">
      <h1>VIAJES</h1>
    </div>
    </main>
    <div class="productos">
      <div class="producto1">
        <div class="imagen-producto1">
          <img id="cataratas-del-iguazu" src="imagenes/cataratas-del-iguazu.jpg" alt="cataratas-del-iguazu">
        </div>
          <div class="titulo-descripcion-producto">
          <br>
          <p class="titulo-producto" >Una semana en las Cataratas del Iguazú</p>
          <br>
          <p class="descripcion-producto">Disfruta de una semana conociendo una de las maravillas del mundo! </p>
          <br>
          </div>
          <div class="ver-mas">
              <a href=""><p>VER MÁS</p></a>
            </div>
        </div>
        <div class="producto2">
          <div class="imagen-producto2">
            <img id="termas-colon" src="imagenes/termas-colon.jpg" alt="termas-colon">
          </div>
            <div class="titulo-descripcion-producto">
            <br>
            <p class="titulo-producto" >Finde Semana en las termas!</p>
            <br>
            <p class="descripcion-producto">Disfruta de un fin de semana en las Termas de Colon!  </p>
            <br>
            </div>
            <div class="ver-mas">
                <a href=""><p>VER MÁS</p></a>
              </div>
          </div>
      </div>
      </body>
      <?php
    require_once ("footer.php");
    ?>
    </html>