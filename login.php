<?php
require_once("clases/autoload.php");
session_start();
function estaElUsuarioLogeado () {
  if (isset($_SESSION["email"])) {
      return true;
  }
  return false;
}

//CREAR LA SESSION DEL USUARIO//
if (isset($_COOKIE['recordarme'])) {
  $_SESSION['email'] = $_COOKIE['recordarme'];
}

if(estaElUsuarioLogeado()){
  header('location:profile.php');
};

//VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
$email="";
$password="";

//VARIABLES QUE SE USAN PARA TIRAR EL MENSAJE DE "ERROR NO COMPLETASTE EL NOMBRE"//
$completeSuEmail = "";
$completeSuContrasena ="";
$noEsUnMail= "";

$errores = [];
//PERSISTENCIA//
if($_POST){
  $email = $_POST['email'];
  $validarLogin = new ValidadorLogin($_POST['email'],$_POST['password']);
  $errores = $validarLogin->validar();



if(empty($errores)){
//GUARDAR LA COOCKIE
 if (isset($_POST['recordarme'])) {
  setcookie('recordarme', $email, time() + 60*60*24*7);
  };
  var_dump("HASTA AKAH LLEGAMO ");
  exit;
  //SESSION!! instanciar autenticador, y active el session y gaurde el usuario.
}


}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

     <?php require_once("header.php"); ?>

  <div class="formulario-ingreso">
    <form class="formulario-ingreso" action="login.php" method="post">
      <h1>Ingresá</h1>
      <div class="formulario">
      <label for="email">
        <p>Usuario:</p>
        <input type="text" name="email" value="<?= $email ?>" id="email" placeholder="Complete el campo">
        <br>
        <small class="error"><?= $errores['email'][0] ?? '' ?></small>
        <small class="error"><?= $errores['email'][1] ?? '' ?></small>
      </label>
      <br>
      <br>
      <label for="contraseña">
        <p>Contraseña:</p>
        <input type="password" name="password" value="" id="password" placeholder="Complete el campo">
        <br>
        <?= $errores['password'][0] ?? '' ?>
      </label>
      <br>

       <input type="checkbox" name="recordarme" id="recordarme" value="rec" checked>
       <label for="recordar">Recordarme</label>
      <br>
      <br>
      <p>
        <button type="submit" name="submit">Enviar</button>
      </p>

      <div class= "texto-nuevo">
        <p>¿Eres nuevo?
          <br>
          <a href="registrate.php">Registrate</a></p>
      </div>

      </div>
    </form>
      <?php require_once("footer.php"); ?>
  </div>
  </body>
</html>
