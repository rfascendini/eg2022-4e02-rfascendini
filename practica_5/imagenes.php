<?php session_start();
if (!isset($_SESSION["cantidad_paginas_visitadas"])) {
    $_SESSION["cantidad_paginas_visitadas"] = 1;
} else {
    $_SESSION["cantidad_paginas_visitadas"]++;
} ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Práctica 5 - HOME</title>
</head>

<body>

    <?php include("header.php"); ?>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="container text-center my-3">
                <h4>Cantidad de Visitas: <?php echo $_SESSION['cantidad_paginas_visitadas']; ?></h4>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://haciendofotos.com/wp-content/uploads/fotos-paisajes-istock-1.jpg" alt="" srcset="">

                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://www.dzoom.org.es/wp-content/uploads/2019/06/fotografia-paisaje-consejos-17-734x489.jpg" alt="" srcset="">

                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://content.skyscnr.com/m/6cd9ada5314c53a9/original/GettyImages-467310275.jpg?resize=1800px:1800px&quality=100" alt="" srcset="">
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://mott.pe/noticias/wp-content/uploads/2017/09/luca-libralato-compressor.png" alt="" srcset="">

                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://estag.fimagenes.com/img/2/1/5/7/K/157K_900.jpg" alt="" srcset="">

                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg">
                        <img src="https://static.misionesonline.news/wp-content/uploads/2022/02/Cataratas-del-Iguazu1.jpg" alt="" srcset="">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <script></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>