<?php

$conexion = new mysqli("localhost", "root", "root", "eg_ej8_practica6");
$sql = mysqli_query($conexion, "SELECT * FROM canciones");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo basename(dirname(__FILE__)); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <div class="container" style="max-width:320px">
    <form action="">
      Busca entre nuestros modelos: <input type="search" name="buscar" list="listaCanciones"><input type="submit" value="Buscar">
      <datalist id="listaCanciones">
        <?php if ($sql) {
          while ($canciones = mysqli_fetch_assoc($sql)) {
        ?>
            <option><?php echo $canciones['nombre']; ?></option>
          <?php }
        } ?>
      </datalist>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>