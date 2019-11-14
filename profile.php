<?php
require_once("clases/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/profile.css">

    <title>Document</title>
  </head>
  <body>
  <div class="contenedor">
    <?php
  require_once ("header.php");
  ?>

      <main>
        <div class="titulo">
          <h1>Mi perfil</h1>
        </div>
        <div>
          <div class="contenedor-avatar">
            <img class="avatar" src="imagenes/avatar.png" alt="avatar">
          </div>
        </div>
        <div class="padre-datos">
          <div class="datos">
              <p>Nombre:</p>
              <br>
              <p>Apellido:</p>
              <br>
              <p>Dirección</p>
              <br>
              <p>Teléfono</p>
              <br>
              <p>E-Mail:</p>
              <br>
              </div>
          <div class="datos-rellenados">
              <p>jhon</p>
              <br>
              <p>Doe</p>
              <br>
              <p>Av. Corrientes 3500, C.A.B.A</p>
              <br>
              <p>011 4752-8739</p>
              <br>
              <p>john_doe@someone.com</p>
              <br>
          </div>
        </div>

      </main>

  </div>

  </body>
  <?php
  require_once ("footer.php");
  ?>

</html>
