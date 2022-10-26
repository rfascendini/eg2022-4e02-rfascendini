<?php

    $email = $_POST['email'];

    $conexion = new mysqli("localhost", "root", "root", "eg_ej6_practica7");
    $sql = mysqli_query($conexion, "SELECT * FROM alumnos WHERE email = '$email'");
    $alumno = mysqli_fetch_assoc($sql);

    if ($alumno) {
        session_start();
        $_SESSION['nombre'] = $alumno['nombre'];
        header("Location: bienvenido.php");
    } else {
        session_start();
        $_SESSION['error'] = "El Email ingresado no corresponde a ningun alumno existente...";
        header("Location: index.php");
    }

