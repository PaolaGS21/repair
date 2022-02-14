<html>

<head>
    <title>TECHNICIAN</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
        integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="static/css/EstiloMenu2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <?php require("menu.php"); ?>


    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <center>
                    <h1>TECHNICIAN<h1>
                </center>

                <form method="POST" action="part.php">

                    <div class="form-group">
                        <label for="Nombre">Nombres</label>
                        <input type="text" name="Nombre" class="form-control"
                            placeholder="Introduce los nombres del cliente" id="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="Apellido_P">Apellidos</label>
                        <input type="text" name="Apellido_P" class="form-control" placeholder="Introduce apellido"
                            id="Apellido_P">
                    </div>

                    <div class="form-group">
                        <label for="Direccion">Email</label>
                        <input type="text" name="Direccion" class="form-control"
                            placeholder="Introduce tu dirección actual" id="Direccion">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Direccion</label>
                        <input type="text" name="Telefono" class="form-control"
                            placeholder="Introduce el número de tu telefono celular" id="Telefono">
                    </div>

                    <div class="form-group">
                        <label for="Email">Telefono</label>
                        <input type="text" name="Email" class="form-control"
                            placeholder="Introduce tu correo electronico" id="Email">
                    </div>

                    <center>
                        <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
                        <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
                        <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
                        <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">
                    </center>
                    </from>
            </div>

            <div class="col-md-8">
                <table class="table" style="resize:both;">
                    <thead class="table-success table-striped">
                        <tr>

                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Telefono</th>

                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>00001</th>
                            <td>Jose</td>
                            <td>Gonzales</td>
                            <td>correo@gmail.com</td>
                            <td>C-55C X 24 y 25</td>
                            <td>9999999999</td>
                        </tr>
                        <tr>
                            <th>00002</th>
                            <td>Jose</td>
                            <td>Gonzales</td>
                            <td>correo@gmail.com</td>
                            <td>C-55C X 24 y 25</td>
                            <td>9999999999</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</body>

</html>