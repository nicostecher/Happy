<?php
session_start();
require_once("clases/autoload.php");
session_destroy();
$desloguear=new autenticador();
$cerrarSesion=$desloguear->desloguear();
header('location:home.php');
?>