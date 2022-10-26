<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['contraseña'] = $_POST['contraseña'];

header("Location: recuperarSesion.php");

?>