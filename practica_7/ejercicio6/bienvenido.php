<?php


    session_start();

    if(isset($_SESSION['nombre'])) {

    echo "BIENVENIDO, ".$_SESSION['nombre']."!"; 
    
    } else {

        echo "Usted, no tiene permiso de ver esta página.";
        ?>
        <a href="index.php">Volver</a>
        <?php
    }

?>