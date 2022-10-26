<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vacantes - Módulo de Vacantes UTN FRRo</title>
  <?php include("css.php"); ?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


</head>

<body class="bg-secondary">

  <!-- HEADER  -->
  <?php include("header.php"); ?>


  <div class="container p-5">

    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>APELLIDO Y NOMBRE</th>
          <th>PUNTAJE</th>
          <th>POSICIÓN</th>
        </tr>
      </thead>
      <tbody>
        <?php $sql_candidatos = array(); ?>
        <?php if($sql_candidatos) {
          foreach($sql_candidatos as $candidatos) { ?>
            <td></td>
            <td></td>
            <td></td>
        <?php
          }
        } else { ?>
            <td class="text-center" colspan="3">No hay registros por mostrar</td>
        <?php 
        }
        ?>

        
      </tbody>
    </table>


  </div>


  <!-- FOOTER  -->
  <?php include("footer.php"); ?>



  <!-- JS -->
  <?php include("js.php"); ?>
</body>

</html>