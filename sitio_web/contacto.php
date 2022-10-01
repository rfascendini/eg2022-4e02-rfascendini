<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto - Módulo de Vacantes UTN FRRo</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- ESTILOS PROPIOS DE CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="">

    <!-- HEADER  -->
    <?php include("header.php"); ?>

    <div class="container">

        <div class="my-3 p-3 text-center">
            <h2 class="display-1">CONTACTO</h2>
            <p class="lead">¡Cualquier consulta puede realizarla mediante éste formulario!</p>
        </div>

        <div class="my-5">

        

            <form class="row needs-validation" novalidate>

                <div class="col-12 mb-3">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustom03" aria-describedby="inputGroupPrepend" placeholder="Correo Electrónico" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Teléfono" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <textarea name="" class="form-control" id="validationCustom05" rows="5" placeholder="Mensaje..."></textarea>
                    <div class="invalid-feedback">
                        
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-dark px-5" type="submit">ENVIAR MENSAJE</button>
                </div>
            </form>
        </div>


    </div>


    <!-- FOOTER  -->
    <?php include("footer.php"); ?>


    <!-- JS -->
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>


    <?php include ("js.php"); ?>
</body>

</html>