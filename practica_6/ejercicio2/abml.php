<?php $conexion = new mysqli("localhost", "root", "root", "eg_ej2_practica6"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EJERCICIO 2 - PRÁCTICA 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="" style="height:90vh;">

    <?php if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {

            case "add":

                $sql = "INSERT INTO capitales (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('" . $_POST['ciudad'] . "','" . $_POST['pais'] . "'," . $_POST['habitantes'] . "," . $_POST['superficie'] . "," . $_POST['tieneMetro'] . ")";

                echo $sql;

                if ($conexion->query($sql) === true) {
                    header("Location: abml.php?accion=listar");
                }

                break;
            case "update":

                $sql = "UPDATE capitales SET ciudad = '" . $_POST['ciudad'] . "', pais = '" . $_POST['pais'] . "', habitantes = " . $_POST['habitantes'] . ", superficie = " . $_POST['superficie'] . ", tieneMetro = " . $_POST['tieneMetro'] . " WHERE id = ".$_POST['id'];

                if ($conexion->query($sql) === true) {
                    header("Location: abml.php?accion=listar");
                }

                break;
        }
    }

    // ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ----

    if (isset($_GET['accion'])) {
        switch ($_GET['accion']) {

            case "nuevo": ?>

                <div class="container mt-5" style="max-width:596px">
                    <div class="container border p-5">
                        <h3 class="mb-2">ALTA DE CAPITAL</h3>
                        <form action="" method="post">
                            <input type="hidden" name="accion" value="add">

                            <div class="mb-3">
                                <label for="ciudad" class="form-label">CIUDAD</label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad">
                            </div>

                            <div class="mb-3">
                                <label for="pais" class="form-label">PAIS</label>
                                <input type="text" class="form-control" name="pais" id="pais">
                            </div>

                            <div class="mb-3">
                                <label for="habitantes" class="form-label">HABITANTES</label>
                                <input type="number" class="form-control" name="habitantes" id="habitantes">
                            </div>

                            <div class="mb-3">
                                <label for="superficie" class="form-label">SUPERFICIE</label>
                                <input type="number" step="0.01" name="superficie" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="mb-3">
                                <label for="tieneMetro" class="form-label">TIENE METRO</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tieneMetro" value="1" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        SI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tieneMetro" value="0" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        NO
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success" name="" value="">AGREGAR</button>
                            </div>

                    </div>

                    </form>


                    <div class="container mt-5">
                        <div class="text-center">
                            <a href="index.php" class="btn btn-primary btn-lg">INICIO</a>
                        </div>
                    </div>

                </div>

            <?php break;
                // ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ----
            case "listar": ?>


                <?php
                $sql = mysqli_query($conexion, "SELECT * FROM capitales");
                ?>

                <div class="container mt-5">
                    <table class="table table-hover table-dark">
                        <thead>
                            <th>ID</th>
                            <th>Ciudad</th>
                            <th>País</th>
                            <th>Habitantes</th>
                            <th>Superficie</th>
                            <th>Tiene Metro</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            <?php if ($sql) {
                                while ($capitales = mysqli_fetch_assoc($sql)) { {
                            ?>
                                        <tr>
                                            <td><?php echo $capitales['id']; ?></td>
                                            <td><?php echo $capitales['ciudad']; ?></td>
                                            <td><?php echo $capitales['pais']; ?></td>
                                            <td><?php echo $capitales['habitantes']; ?></td>
                                            <td><?php echo $capitales['superficie']; ?></td>
                                            <td><?php echo $capitales['tieneMetro']; ?></td>
                                            <td>
                                                <a href="abml.php?accion=editar&id=<?php echo $capitales['id']; ?>" class="btn btn-warning">Editar</a>
                                                <a href="abml.php?accion=eliminar&id=<?php echo $capitales['id']; ?>" class="pe-2 btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                <?php }
                                }
                            } else { ?>
                                <tr>
                                    <td class="text-center" colspan="6">No hay registros que mostrar...</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                    <div class="container mt-5">
                        <div class="text-center">
                            <a href="index.php" class="btn btn-primary btn-lg">INICIO</a>
                        </div>
                    </div>


                </div>




            <?php break;
                // ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ----
            case "editar":  ?>

                <?php
                $sql = mysqli_query($conexion, "SELECT * FROM capitales WHERE id=" . $_GET['id'] . "");
                $capital = mysqli_fetch_assoc($sql);
                ?>

                <div class="container mt-5" style="max-width:596px">
                    <div class="container border p-5">
                        <h3 class="mb-2">ALTA DE CAPITAL</h3>
                        <form action="" method="post">
                            <input type="hidden" name="accion" value="update">
                            <input type="hidden" name="id" value="<?php echo $capital['id']; ?>">

                            <div class="mb-3">
                                <label for="ciudad" class="form-label">CIUDAD</label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?php echo $capital['ciudad']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="pais" class="form-label">PAIS</label>
                                <input type="text" class="form-control" name="pais" id="pais" value="<?php echo $capital['pais']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="habitantes" class="form-label">HABITANTES</label>
                                <input type="number" class="form-control" name="habitantes" id="habitantes" value="<?php echo $capital['habitantes']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="superficie" class="form-label">SUPERFICIE</label>
                                <input type="number" step="0.01" name="superficie" class="form-control" id="superficie" value="<?php echo $capital['superficie']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="tieneMetro" class="form-label">TIENE METRO</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tieneMetro" value="1" id="flexRadioDefault1" <?php if($capital['tieneMetro'] == 1){ echo "checked";} ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        SI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tieneMetro" value="0" id="flexRadioDefault2" <?php if($capital['tieneMetro'] == 0){ echo "checked";} ?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        NO
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success" name="" value="">EDITAR</button>
                            </div>

                    </div>

                    </form>


                    <div class="container mt-5">
                        <div class="text-center">
                            <a href="index.php" class="btn btn-primary btn-lg">INICIO</a>
                        </div>
                    </div>

                </div>



    <?php break;
                // ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ----

            case "eliminar":

                $sql = "DELETE FROM capitales WHERE id = " . $_GET['id'];

                if ($conexion->query($sql) === true) {
                    header("Location: abml.php?accion=listar");
                }

                break;
        }
    } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>