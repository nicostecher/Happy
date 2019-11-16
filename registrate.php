<?php

require_once("clases/autoload.php");

//VALUES VACIOS PARA RELLENAR//
$nombre="";
$apellido="";
$email="";
$password="";
$confirmarPassword="";
$avatar="";
$errores=[];

if($_POST){
      //PERSISTENCIA//
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $confirmarPassword=$_POST["confirmarPassword"];
      

      //VALIDACION DE LOS DATOS//
      $validarRegistro=new validarRegistro($_POST["email"],$_POST["password"],$_POST["confirmarPassword"],$_FILES["avatar"],$_POST['nombre'],$_POST['apellido']);
    
      $errores=$validarRegistro->validar();
     

      //SI NO HAY ERRORES SUBIMOS LA IMAGEN DEL USUARIO AL SERVIDOR//
    if(!$errores){
          if(isset($_FILES["avatar"])){
          $ext=pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
          $avatar = $email . "." . $ext;
          move_uploaded_file($_FILES["avatar"]["tmp_name"],"fotodeUsuario/".$avatar);
        }
      
        //SI NO HAY ERRORES CREAMOS EL USUARIO EN NUESTRO JSON//
        $usuario=new usuario($_POST["nombre"],$_POST["apellido"] ,$_POST["email"],$_POST["password"], $avatar);

        $database=new baseDatos();
        
        $usuarioJson=$database->guardarUsuario($usuario);

        header("location:home.php");
      }

 
}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/registrate.css">
  </head>

  <body>

      <?php require_once("header.php"); ?>

      <main>
        <div class="registro">
          <h1>Registrate!</h1>
        <form class="registro" action="registrate.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">
                <p>Nombre:</p>
                <input id="nombre" type="text" name="nombre" value="<?=$nombre?>">
                <br>
                <small class="error"><?= $errores['nombre'] ?? '' ?></small>
            </label>
          <br>
          <br>
            <label for="apellido">
              <p>Apellido:</p>
              <input id="apellido" type="text" name="apellido" value="<?=$apellido?>">
              <br>
              <span class="error"><?= $errores['apellido'] ?? '' ?></span>
            </label>
          <br>
          <br>
            <label for="email">
              <p>Email: </p>
              <input type="email" name="email" value="<?=$email?>">
              <br>
              <small class="error"><?= $errores['email'] ?? '' ?></small>
              <small class="error"><?= $errores['email'] ?? '' ?></small>
            </label>
          <br>
          <br>
            <label for="password">
              <p>Contraseña:</p>
              <input type="password" name="password" value="<?=$password?>">
              <br>
              <small class="error"><?= $errores['password'] ?? '' ?></small>
            </label>
          <br>
          <br>
            <label for="confirmarPassword">
            <p>Repetí tu contraseña:</p>
            <input type="password" name="confirmarPassword" value="<?=$confirmarPassword?>">
            <br>
            <small class="error">
              <?= $errores['password'][0] ?? '' ?> <br>
                <?= $errores['password'][1] ?? '' ?>
                <?= $errores['password'][2] ?? '' ?>
          </small>
            </label>

          <br>
          <br>

            <input type="file" name="avatar" value="">
            <small class="error"><?=$errores["avatar"]["error"]?? ""?>
            <?=$errores["avatar"]["error"]?? "" ?>
            </small>


        <div class="botones">
          <p>
            <button id="boton-enviar"type="submit" name="button">Enviar</button>
            <button id="boton-borrar"type="reset" name="reset">Borrar</button>
          </p>
          </div>
          </form>
        </div>
      </main>

  <?php require_once("footer.php"); ?>
  
  </body>
</html>