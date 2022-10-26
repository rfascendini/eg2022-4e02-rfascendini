<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo basename(dirname(__FILE__)); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="height:90vh">

  <?php if (isset($_POST['nombre'])) {
    setcookie("ultimo_nombre", $_POST['nombre']);
  } ?>

  <div class="container" style="max-width:596px">
    <div class="p-5">
      <form action="" method="post">
        <div class="mb-3">
          <label for="nombre" class="form-label">NOMBRE</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese un nombre...">
        </div>
        <button type="submit" class="btn btn-info text-white">Enviar</button>
      </form>
      <div class="mt-5">
        <label for="ultimoNombre" class="form-label">EL NOMBRE INGRESADO LA ÚLTIMA VEZ FUE</label>
        <h3 id="ultimoNombre"><?php if (isset($_COOKIE)) {
                                echo $_COOKIE["ultimo_nombre"];
                              } ?></h3>
      </div>


    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>