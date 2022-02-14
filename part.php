<html>

<head>
    <title>PART</title>
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
                    <h1>PART<h1>
                </center>

                <form method="POST" action="part.php">

                    <div class="form-group">
                        <label for="id_numserie">N° de Serie</label>
                        <input type="text" name="id_numserie" class="form-control"
                            placeholder="Ingresa el numero de serie del vehiculo" id="id_numserie">
                    </div>

                    <div class="form-group">
                        <label for="Nombre_P">Nombre pieza</label>
                        <input type="text" name="Nombre_P" class="form-control" id="Nombre_P">
                    </div>

                    <div class="form-group">
                        <label for="Direccion_Prov">Proveedor</label>
                        <input type="text" name="Proveedor" class="form-control" id="Proveedor">
                    </div>

                    <div class="form-group">
                        <label for="Telefono_Prove">Telefono proveedor</label>
                        <input type="text" name="Telefono_Prove" class="form-control" id="Telefono_Prove">
                    </div>

                    <div class="form-group">
                        <label for="Precio_Mayoreo">Precio de compra</label>
                        <input type="text" name="Precio_Mayoreo" class="form-control" id="Precio_Mayoreo">
                    </div>

                    <div class="form-group">
                        <label for="Precio_Mayoreo">Precio de venta</label>
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

                            <th>No. Serie</th>
                            <th>Nombre pieza</th>
                            <th>Proveedor</th>
                            <th>Telefono proveedor</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>

                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>34245511231</th>
                            <td>Freno</td>
                            <td>CVA</td>
                            <td>99999999999</td>
                            <td>$500.00</td>
                            <td>$1000.00</td>
                        </tr>
                        <tr>
                            <th>34245511232</th>
                            <td>Piston</td>
                            <td>CVA</td>
                            <td>99999999999</td>
                            <td>$500.00</td>
                            <td>$1000.00</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </from>
</body>

</html>