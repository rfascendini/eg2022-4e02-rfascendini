<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <?php include("css.php"); ?>
</head>

<body class="bg-secondary bg-gradient">

  <!-- HEADER  -->
  <?php include("header.php"); ?>

  <!-- SECCION COVER PRESENTACIÓN -->
  <section>

    <div class="bg-dark align-items-center d-flex justify-content-center text-center" id="cover" style="height:60vh; margin-top:-60px">
      <h1 class="text-white display-1">¡Bienvenidos al nuevo <br>Módulo de Vacantes<br>de la UTN FRRo!</h1>
    </div>

  </section>

  <!-- SECCION REVERSE BG PARA DAR EFECTO FADE -->
  <section>
    <div class="bg-dark-gradient-reverse" style="height:60px"></div>
  </section>

  <div class="container-fluid">

    <!-- SECCION CARDS -->
    <section id="cards">
      <div class="row align-items-stretch py-5">

        <div class="col-md-4 col-12 my-3">
          <div class="card m-3 overflow-hidden text-bg-dark bg-gradient rounded-4 shadow-xl h-100">
            <img class="cardsHome" src="mthumb.php?src=http://localhost/EG/sitio_web/imagenes/imagen1.jpg&amp;w=1920&amp;h=1200" alt="" srcset="">
            <div class="card-body text-center d-flex justify-content-center align-content-between flex-wrap">
              <h1 class="my-1 lh-1 fw-bold">Búsqueda de Vacantes</h1>
              <p class="card-text m-0">Los usuarios podrán visualizar las nuevas vacantes disponibles, donde las personas que deseen inscribirse puedan hacerlo.</p>
              <a href="vacantes.php" class="mb-2 mt-2 btn btn-outline-light">Vacantes Disponibles</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 my-3">
          <div class="card m-3 overflow-hidden text-bg-dark bg-gradient rounded-4 shadow-xl h-100">
            <img class="cardsHome" src="mthumb.php?src=http://localhost/EG/sitio_web/imagenes/imagen2.jpg&amp;w=626&amp;h=521" alt="" srcset="">
            <div class="card-body text-center d-flex justify-content-center align-content-between flex-wrap">
              <h1 class="my-1 lh-1 fw-bold">Listas de Resultados</h1>
              <p class="card-text m-0">Los resultados de las evaluaciones realizadas por las autoridades serán publicadas en ésta sección.</p>
              <a href="" class="mb-2 btn btn-outline-light">Listar Resultados</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 my-3">
          <div class="card m-3 overflow-hidden text-bg-dark bg-gradient rounded-4 shadow-xl h-100">
            <img class="cardsHome" src="mthumb.php?src=http://localhost/EG/sitio_web/imagenes/imagen3.jpg&amp;w=1268&amp;h=628" alt="" srcset="">
            <div class="card-body text-center d-flex justify-content-center align-content-between flex-wrap">
              <h1 class="my-1 lh-1 fw-bold">Selección de Personal</h1>
              <p class="card-text m-0">En ésta sección se explirá como funciona el método de selección y algunos de sus criterios de evaluación.</p>
              <a href="" class="mb-2 btn btn-outline-light">Ver Información</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- FOOTER  -->
  <?php include("footer.php"); ?>


  <!-- JS -->
  <?php include("js.php"); ?>
</body>

</html>