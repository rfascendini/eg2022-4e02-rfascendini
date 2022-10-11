<?php

session_start();
if (!isset($_SESSION["cantidad_paginas_visitadas"])){
    $_SESSION["cantidad_paginas_visitadas"] = 1;
   }else{
    $_SESSION["cantidad_paginas_visitadas"]++;
   }

if (isset($_POST['enviar'])) {
    if ($_POST['enviar'] == 1) {
        $destinatario = $_POST['destinatario'];
        $asunto = $_POST['asunto'];
        $headers =
            "From: renzo.jrr10@gmail.com" . "\r\n" .
            "Content-Type: text/html; charset=UTF-8";
        $cuerpo =
            "   
        <html>
            <body>
                " .
            $_POST['mensaje']
            . "
            </body>
        </html>
    ";

        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
?>
            <script>
                alert("El correo ha sido enviado con éxito!");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Hubo un error al enviar el correo!");
            </script>
<?php
        };
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Práctica 5 - CONTACTO</title>
</head>

<body>


    <?php include("header.php"); ?>

    <div class="container text-center my-3">
        <h4>Cantidad de Visitas: <?php echo $_SESSION['cantidad_paginas_visitadas']; ?></h4>
    </div>

    <div class="container" style="max-width:768px">
        <form action="" method="post">
            <div class="mb-3">
                <label for="destinatario" class="form-label">Destinatario</label>
                <input type="email" class="form-control" name="destinatario" id="destinatario" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg" name="enviar" value="1">Enviar</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>