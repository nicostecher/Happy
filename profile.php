<?php
require_once("clases/autoload.php");

if (isset($_COOKIE['recordame'])) {
  $usuarioRegistrado=new autenticador();
  $cargarUsuario=$usuarioRegistrado->loguear($_COOKIE['recordarme']);
}

if(!$_SESSION["email"]){
  header('location:home.php');
 }
 
 
 $usuario = file_get_contents('archivosDelUsuario.json');
 
 $usuarios = json_decode($usuario, true);

foreach($usuarios as $usuario){
  if($usuario){
    $_SESSION["email"]=$usuario["email"];
    $_SESSION['nombre']=$usuario['nombre'];
    $_SESSION["avatar"]=$usuario["avatar"];
  }
  }
  


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
          </div>
        </div>
        <div class="padre-datos">
          <div class="datos">
              <p>Nombre:</p>
              <br>
              <p>E-Mail:</p>
              <br>
              </div>
          <div class="datos-rellenados">
              <p></p>
              <p><?=$usuario['nombre'];?><p>
              <br>
              <p><?=$usuario['email'];?><p>
             
              
          </div>
        </div>

      </main>

  </div>

  </body>
  <?php
  require_once ("footer.php");
  ?>

</html>
