<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" ></link>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Registrar Vehiculo</h1>

                <form class="create" method="post">
                    <div class="form-group">
                    <label>Nombre </label>
                    <input class="form-control" type="text" name="name" placeholder="Nombre" />
                    </div>
                    <div class="form-group">
                    <label>Tipo</label>
                    <select name="tipo" class="form-control">
                        <option value="1">Sedan</option>
                        <option value="2">Motocicleta</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label> Potencia </label>
                    <input class="form-control" type="text" name="potencia" placeholder="Potencia" />
                    </div>
                    <div class="form-group">
                    <label> Marca </label>
                    <input class="form-control" type="text" name="marca" placeholder="Marca" />
                    </div>
                    <input type="submit" value="Registrar" class="btn btn-success" />
                    <a href="home.php" class="btn btn-danger" >Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/helpers/helper.js"></script>
    <script type="text/javascript" src="assets/js/views/addView.js"></script>
    <script>
        new AddView();
    </script>
</body>
</html>