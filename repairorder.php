<html>

<head>
    <title>REPAIR ORDER</title>
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
                    <h1>REPAIR ORDER<h1>
                </center>

                <form method="POST" action="proveedores.php">

                    <div class="form-group">
                        <label for="Nombre">Folio</label>
                        <input type="text" name="Folio" class="form-control" placeholder="Introduce el folio"
                            id="Folio">
                    </div>

                    <div class="form-group">
                        <label for="TecAsignado">Técnico Asignado</label>
                        <input type="text" name="TecAsignado" class="form-control" placeholder="Técnico Asignado"
                            id="TecAsignado">
                    </div>

                    <div class="form-group">
                        <label for="Nombre">ID Cliente</label>
                        <input type="text" name="Descripción" class="form-control" placeholder="Descripción"
                            id="Descripción">
                    </div>

                    <div class="form-group">
                        <label for="Nombre">Vechiculo</label>
                        <input type="text" name="Descripción" class="form-control" placeholder="Descripción"
                            id="Descripción">
                    </div>

                    <div class="form-group">
                        <label for="Nombre">Partes</label>
                        <input type="text" name="Partes" class="form-control" placeholder="Partes" id="Partes">
                    </div>

                    <div class="form-group">
                        <label for="Nombre">Descripción</label>
                        <input type="text" name="Descripción" class="form-control" placeholder="Descripción"
                            id="Descripción">
                    </div>

                    <div class="form-group">
                        <label for="Precio_Mayoreo">Queja</label>
                        <input type="text" name="Precio_Mayoreo" class="form-control" id="Precio_Mayoreo">
                    </div>

                    <center>
                        <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
                        <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
                        <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
                        <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">
                    </center>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table" style="resize:both;">
                    <thead class="table-success table-striped">
                        <tr>

                            <th>Folio</th>
                            <th>Customer</th>
                            <th>Vehicle</th>
                            <th>Technician</th>
                            <th>Partes</th>
                            <th>Quejas</th>

                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>00001</th>
                            <td>Jose</td>
                            <td>Mazda</td>
                            <td>Morales</td>
                            <td>MFP0001</td>
                            <td>Ninguna</td>
                        </tr>
                        <tr>
                            <th>00002</th>
                            <td>Jose</td>
                            <td>Mazda</td>
                            <td>Morales</td>
                            <td>MFP0001</td>
                            <td>Ninguna</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>