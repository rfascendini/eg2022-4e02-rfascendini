<?php session_start();
if (!isset($_SESSION["cantidad_paginas_visitadas"])) {
    $_SESSION["cantidad_paginas_visitadas"] = 1;
} else {
    $_SESSION["cantidad_paginas_visitadas"]++;
} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Práctica 5 - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php include("header.php"); ?>

    <div class="container text-center my-3">
        <h4>Cantidad de Visitas: <?php echo $_SESSION['cantidad_paginas_visitadas']; ?></h4>
    </div>


    <div class="container mt-5 text-center">
        <button class="btn btn-info btn-lg text-white" onclick="copiarAlPortapapeles()">RECOMENDAR (COPIAR URL) PÁGINA A UN AMIGO</button>

    </div>



    <script>
        function copiarAlPortapapeles(url) {
            var aux = document.createElement("input");
            aux.setAttribute("value", location.href);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
            alert("La URL ha sido copiada en el portapapeles!");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>