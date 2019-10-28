<?php
session_start();
session_destroy();
setcookie('recordarme', '', time()-1);
header('location:login.php');
?>