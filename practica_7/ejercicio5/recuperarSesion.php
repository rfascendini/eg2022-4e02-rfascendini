<?php

session_start();

echo "Usuario:   ".$_SESSION['usuario'] . "<br>";
echo "Contraseña:     ".$_SESSION['contraseña'] . "<br>";

?>