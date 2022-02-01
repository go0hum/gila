<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" ></link>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Listado de vehiculos</h1>

                <div class="row">
                    <div class="col text-right">
                        <div class="btn-group pull-rigth" role="group" aria-label="Options">
                            <a href="agregar.php"class="btn btn-secondary">Agregar</a>
                            <a href="salir.php" class="btn btn-secondary">Salir</a>
                        </div>
                    </div>
                </div>

                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>Vehiculo</th>
                            <th>Nombre</th>
                            <th>Llantas</th>
                            <th>Potencia</th>
                            <th>Marca</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="rows">
                    </tbody>
                </table>
            </did>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/helpers/helper.js"></script>
    <script type="text/javascript" src="assets/js/views/vehiculesView.js"></script>
    <script>
        new VehiculesView();
    </script>
</body>
</html>