<?php
require_once("clases/autoload.php");
if (isset($_COOKIE['recordarme'])){
 $usuarioRegistrado=new autenticador();
 $cargarUsuario=$usuarioRegistrado->loguear($_COOKIE['recordarme']);

}

if(isset($_SESSION["email"])){
 header('location:profile.php');
}


//VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
$email="";
$password="";

//VARIABLES QUE SE USAN PARA TIRAR EL MENSAJE DE "ERROR NO COMPLETASTE EL NOMBRE"//
$completeSuEmail = "";
$completeSuContrasena ="";
$noEsUnMail= "";
$errores = [];


if($_POST){
  //PERSISTENCIA//
  $email = $_POST['email'];
  $Password=$_POST['password'];
  
  //VALIDAMOS LOS ERRORES//
  $validarLogin = new ValidadorLogin($_POST['email'],$_POST['password']);
  $errores = $validarLogin->validar();

  //SI NO HAY ERRORES CONFIRMAMOS QUE EXISTA EL USUARIO//
  if(!$errores){
  $validarUsuario= new Autenticador();
  $usuarioRegistrado=$validarUsuario->loguear($email); 
 
  
    
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
      <label for="password">
        <p>Contraseña:</p>
        <input type="password" name="password" value="" id="password" placeholder="Complete el campo">
        <br>
       <small class="error"><?= $errores['password'][0] ?? '' ?></small> 
      </label>
      <br>

       <input type="checkbox" name="recordarme" id="recordarme" value="" checked>
       <label for="recordar">Recordarme</label>
       <small class= "error"><?= $errores["recordarme"][0] ?? ""?></small>
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
