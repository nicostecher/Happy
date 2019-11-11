<?php
require_once("autoload.php")
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

//VARIABLES QUE SE USAN PARA TIRAR EL MENSAJE DE "ERROR NO COMPLETASTE EL NOMBRE"//
$completeSuEmail = "";
$completeSuContrasena ="";
$noEsUnMail= "";


//PERSISTENCIA//
if($_POST){
  $email=$_POST["email"];
  $completeSuEmail = validarEmail();
  $completeSuContrasena =validarContrasena();
  $noEsUnMail= noEsUnEmail();

  


  
//GUARDAR LA COOCKIE
 if (isset($_POST['recordarme'])) {
  setcookie('recordarme', $email, time() + 60*60*24*7);
  };


}

//VALIDACION//
function validarEmail(){
  if (strlen($_POST["email"])==0){
    $completeSuEmail = "Complete su email <br>";
    return $completeSuEmail;
  }
}

function noEsUnEmail(){
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
   $noEsUnMail= "El campo no es un email <br>";
   return $noEsUnMail;
  }
}

function validarContrasena() {
if (strlen ($_POST["password"])==0) {
   $completeSuContrasena= "La contraseña esta vacia <br>";
   return $completeSuContrasena;
  };
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
        <input type="text" name="email" value="<?php $email ?>" id="email" placeholder="Complete el campo">
        <br>
        <span class="error"><?= $completeSuEmail ?></span>
        <span class="error"><?= $noEsUnMail ?></span>
      </label>
      <br>
      <br>
      <label for="contraseña">
        <p>Contraseña:</p>
        <input type="password" name="password" value="" id="password" placeholder="Complete el campo">
        <br>
        <?php echo $completeSuContrasena ?>
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
