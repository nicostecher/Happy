<?php
//VARIABLES DE LOS DATOS QUE LLENA EL USUARIO EN EL FORMULARIO (ESTAN LLAMADOS DENTRO DE LOS VALUES)//
$nombre="";
$apellido="";
$email="";
$password="";
$confirmarPassword="";

//VARIABLES QUE SE USAN PARA TIRAR EL MENSAJE DE "ERROR NO COMPLETASTE EL NOMBRE"//
$completeSuNombre = "";
$completeSuApellido = "";
$completeSuEmail = "";
$noEsUnMail= "";
$completeSuContrasena = "";
$repitaSuContrasena = "";
$contrasenasNoSonIguales="";
$errorCargaFotoDePerfil=  "";
$errorFormatoFotoDePerfil="";

//PERSISTENCIA//
if($_POST){
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $email=$_POST["email"];
}

// VALIDACION //
if ($_POST) {
  $completeSuNombre = validarNombre();
  $completeSuApellido = validarApellido();
  $completeSuEmail = validarEmail();
  $completeSuContrasena = validarContrasena();

//PONER LOS DATOS DEL USUARIO EN UN ARRAY, Y ESE ARRAY TRANSFORMARLO EN UN JSON//
  $datosDelUsuario=[];
  $hashPassword="";
  $hashPassword=password_hash($_POST['password'],PASSWORD_DEFAULT);
  $datosDelUsuario = [
    'nombre' => $_POST['nombre'],
    'apellido'=>($_POST['apellido']),
    'email'=>($_POST['email']),
    'password'=>$hashPassword,
    'fotoDePerfil'=> ($_FILES['fotoDePerfil'])
  ];
  $bdd = file_get_contents('archivosDelUsuario.json');
  $usuarios = json_decode($bdd,true);
  $usuarios[] = $datosDelUsuario;
  $jsonDatosDelUsuario=json_encode($usuarios);
  file_put_contents('archivosDelUsuario.json',$jsonDatosDelUsuario);

}

//VALIDACION FORMULARIO//
function validarNombre(){
  if (strlen($_POST["nombre"])==0){
    $completeSuNombre = "Complete su nombre <br>";
    return $completeSuNombre;

  }
}

function validarApellido(){
  if (strlen($_POST["apellido"])==0){
    $completeSuApellido = "Complete su apellido <br>";
    return $completeSuApellido;
  }
}

function validarEmail() {
if (strlen($_POST["email"])==0) {
  $completeSuEmail= "El campo esta vacio <br>";
  return $completeSuEmail;

}
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
   $noEsUnMail= "El campo no es un email <br>";
   return $noEsUnMail;
  }
}

function validarContrasena() {
if (strlen ($_POST["password"])==0) {
   $completeSuContrasena= "La contraseña esta vacia <br>";
   return $completeSuContrasena;
  }
if (strlen ($_POST["confirmarPassword"])==0) {
   $repitaSuContrasena= "Repita su contraseña <br>";
   return $repitaSuContrasena;
    }
if (($_POST["password"])!==($_POST["confirmarPassword"])) {
   $contrasenasNoSonIguales= "Las contraseñas no son iguales <br>";
   return $contrasenasNoSonIguales;
 }
}

//VALIDACION FOTO DE PERFIL//
function validarFoto (){
  if ($_FILES){
    if ($_FILES ["fotoDePerfil"]["error"]!=0){
      $errorCargaFotoDePerfil= "Hubo un problema al cargar la Foto de Perfil <br>" ;
    }
   ($ext=pathinfo($_FILES["fotoDePerfil"]["name"],PATHINFO_EXTENSION));
    if ($ext!="jpg"&&$ext!="png") {
      $errorFormatoFotoDePerfil="La foto debe tener formato jpg o png <br>" ;
    }
    else {
      moved_uploaded_file($_FILES["fotoDePerfil"]["tmp_name"],"TP/TP/foto-de-perfil/fotoDePerfil." . $ext);
    }
}
}


//VARIABLES HECHAS PARA JUNTAR LOS DATOS DEL FORMULARIO, EN UN ARRAY//
$datosDelUsuario=[];
$hashPassword="";
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
        <form class="registro" action="registrate.php" method="post" enctype="multipart/form-data">
            <label for="nombre">
                <p>Nombre:</p>
                <input id="nombre" type="text" name="nombre" value="<?= $nombre  ?>">
                <br>
                <span class="error"><?= $completeSuNombre ?></span>
            </label>
          <br>
          <br>
            <label for="apellido">
              <p>Apellido:</p>
              <input id="apellido" type="text" name="apellido" value="<?= $apellido  ?>">
              <br>
              <span class="error"><?= $completeSuApellido ?></span>
            </label>
          <br>
          <br>
            <label for="email">
              <p>Email: </p>
              <input type="email" name="email" value="<?= $email  ?>">
              <br>
              <span class="error"><?= $completeSuEmail ?></span>
              <span class="error"><?=$noEsUnMail ?></span>
            </label>
          <br>
          <br>
            <label for="password">
              <p>Contraseña:</p>
              <input type="password" name="password" value="<?= $password  ?>">
              <br>
            </label>
          <br>
          <br>
            <label for="confirmarPassword">
            <p>Repetí tu contraseña:</p>
            <input type="password" name="confirmarPassword" value="<?= $confirmarPassword  ?>">
            <br>
            <span class="error"><?= $completeSuContrasena ?>
            <?= $contrasenasNoSonIguales ?>
            <?= $repitaSuContrasena  ?>
          </span>
            </label>

          <br>
          <br>


            <input type="file" name="fotoDePerfil" value="">
            <?php echo $errorCargaFotoDePerfil ?>
            <?php echo $errorFormatoFotoDePerfil ?>


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
