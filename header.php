<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/header.css">
  <title>Header</title>
</head>
  <body>
      <header>

              <div class="logo">
                <a href="home.php"><img src="imagenes/logo_happy_final.png" alt="imagenes"></a>
              </div>


              <div class="categoriasDeProductos">
               <ul class=listaDeProductosLaptop>
                  <li><a href="gastronomia.php">Gastronomía</a></li>
                  <li><a href="actividades.php">Actividades</a></li>
                  <li><a href="viajes.php">Viajes</a></li>
               </ul>
              </div>
              
              <!--header en mobile-->

              <div class="hamburguesa">
                  <i class="fas fa-bars"></i>

              </div>

              <div class="login-compras">
                <div class="usuario">
                  <a href="registrate.php"><i class="fas fa-sign-in-alt"></i></a>
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                  <a href="login.php"><i class="fas fa-user"></i></a>
                </div>


              <div class="carrito">
                  <a href="carrito.php"> <i class="fas fa-shopping-cart"></i></a>
                
              </div>

               <!--HEADER EN ESCRITORIO-->
  

              <div class="login-escritorio">
                <ul>
                  <li><a class="link" href="logout.php">cerrar sesión</a></li>
                  <li><a class ="link" href="login.php">Login</a></li>
                  <li><a class= "link"href="registrate.php">Registrarse</a></li>
                </ul>
              </div>
      </header>

         <section class="menu-mobile">
          <ul class="lista-mobile">
              <li><a href="gastronomia.php">Gastronomía</a></li>
              <li><a href="actividades.php">Actividades</a></li>
              <li><a href="viajes.php">Viajes</a></li>
          </ul>
        </section>
