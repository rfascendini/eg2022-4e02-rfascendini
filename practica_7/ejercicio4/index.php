

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo basename(dirname(__FILE__)); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="" style="height:90vh">

  <?php if(isset($_POST['catNoticia']) && isset($_COOKIE['catNoticia'])){setcookie("catNoticia",$_POST['catNoticia']); } else { setcookie("catNoticia","todas"); }?>

  <div class="container">

    <div class="m-auto mt-5" style="max-width:320px;align-items: center;display: grid;justify-content: center;">
      <form action="" method="post">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="catNoticia" id="flexRadioDefault1" value="politica">
          <label class="form-check-label" for="flexRadioDefault1">
          Política
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="catNoticia" id="flexRadioDefault2" value="economica">
          <label class="form-check-label" for="flexRadioDefault2">
          Económica
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="catNoticia" id="flexRadioDefault3" value="deportiva">
          <label class="form-check-label" for="flexRadioDefault3">
          Deportiva
          </label>
        </div>
        <button type="submit" class="btn btn-success">Seleccionar</button>
      </form>
    </div>

    <div class="row text-center d-flex justify-content-stretch align-items-center mt-5">

      <div class="col-12 col-md-4">
        <?php if ($_COOKIE['catNoticia'] == "politica" || $_COOKIE['catNoticia'] == "todas") { ?>
          <h1 class="text-primary">Noticia Política</h1>
        <?php } ?>
      </div>

      <div class="col-12 col-md-4">
        <?php if ($_COOKIE['catNoticia'] == "economica" || $_COOKIE['catNoticia'] == "todas") { ?>
          <h1 class="text-info">Noticia Económica</h1>
        <?php } ?>
      </div>

      <div class="col-12 col-md-4">
        <?php if ($_COOKIE['catNoticia'] == "deportiva" || $_COOKIE['catNoticia'] == "todas") { ?>
          <h1 class="text-success">Noticia Deportiva</h1>
        <?php } ?>
      </div>


      <div class="container text-center mt-5">
        <a href="limpiarCookies.php">Limpiar Cookies</a>
      </div>


    </div>

  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>