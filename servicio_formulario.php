<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de personal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-shopping-bag"></i> servicio
                <a class="btn btn-ligth btn-sm float-rigth " href="servicio.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="usuarios_guardar.php" method="post">
                    <div class="form-group">
                        <label for="tipo_servicio">Tipo servicio</label>
                        <input type="text" class="form-control form-control-sm" id="tipo_servicio" name="tipo_servicio" aria-describedby="tipo_servicio_help">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion_help">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="int" class="form-control form-control-sm" id="precio" name="precio" aria-describedby="precio_help">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>