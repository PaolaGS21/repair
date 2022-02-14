<html>

<head>
    <title>VEHICLE</title>
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
                    <h1>VEHICLE<h1>
                </center>

                <form method="POST" action="libros.php">


                    <div class="form-group">
                        <label for="numserie">N° de Serie</label>
                        <input type="text" name="numserie" class="form-control"
                            placeholder="Ingresa el numero de serie del vehiculo" id="numserie">
                    </div>

                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" name="Marca" class="form-control" placeholder="Ingresa la marca del vehiculo"
                            id="Marca">
                    </div>

                    <div class="form-group">
                        <label for="id_Vehiculo">Modelo</label>
                        <input type="text" name="Modelo" class="form-control"
                            placeholder="Ingresa el modelo del vehiculo" id="Modelo">
                    </div>

                    <div class="form-group">
                        <label for="Matricula">Matricula</label>
                        <input type="text" name="Matricula" class="form-control"
                            placeholder="Ingresa la matricula del vehiculo" id="Matricula">
                    </div>

                    <div class="form-group">
                        <label for="Color">Color</label>
                        <input type="text" name="Color" class="form-control" placeholder="Ingresa el color del vehiculo"
                            id="color">
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

                            <th>No. Serie</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Matricula</th>
                            <th>Color</th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>3525467471</th>
                            <td>Mazda</td>
                            <td>M-505</td>
                            <td>Y-520</td>
                            <td>Gris</td>
                        </tr>
                        <tr>
                            <th>52352466</th>
                            <td>FORD</td>
                            <td>F-150</td>
                            <td>Y-530</td>
                            <td>Rojo</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>