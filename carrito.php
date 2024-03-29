<?php
if ($_POST){
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carrito.css">

  <title>Carrito</title>
</head>
<body>
  <div class="contenedor-principal">

  <?php require_once("header.php")?>
    <main>
      <div class="titulo-compras">
        <h1 class>Mis Compras</h1>
      </div>

      <br>
      <section class="productos">
        <div class="producto1">
        <div class="titulo-productos">
              <h3>Visita Temaiken!</h3>
        </div>
        <div class="corazon">
        <i class="fas fa-heart"></i>
        </div>
          <div class="imagen-producto">
            <img src="imagenes/temaiken.jpg" width="300px" alt="temaiken">
          </div>
          <div class="descripcion-producto">
            <p>Disfruta de un día en familia en Temaiken!, recorrido para 4 personas valido del 1 al 30 de cada mes.Menores de 10 no pagan entrada</p>
          </div>
          <form action="comprar.php" metod="GET">
            <label for="cantidad" class="cantidad">
              Cantidad
            </label>
            <select name="cantidad" id="cantidades">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>

            </select>
            <input type="button" value="Comprar" class="comprar">
          </form>

        </div>

      </section>

      <section class="productos">
        <div class="producto1">
        <div class="titulo-productos">
              <h3>Dia de Spa Para Dos!</h3>
            </div>
          <div class="imagen-producto">
            <img src="imagenes/dia-de-spa-en-pareja.jpg" width="300px" alt="temaiken">
          </div>
          <div class="descripcion-producto">
            <p>Disfruta de un día de Relajación para Dos en en un Spa de lujo total.</p>
          </div>
          <form action="comprar.php" metod="GET">
            <label for="cantidad" class="cantidad">
              Cantidad
            </label>
            <select name="cantidad" id="cantidades">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>

            </select>
            <input type="button" value="Comprar" class="comprar">
          </form>

        </div>

      </section>

    </main>

    <footer>
      <?php require_once("footer.php")?>
    </footer>
  </div>
</body>
</html>
