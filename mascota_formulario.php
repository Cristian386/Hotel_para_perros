<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de mascotas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-heart"></i> Mascotas
                <a class="btn btn-ligth btn-sm float-rigth " href="mascota.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="usuarios_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help">
                    </div>
                    <div class="form-group">
                        <label for="raza">Raza</label>
                        <select class="form-control form-control-sm" id="raza" name="raza">
                            <option value="">Selecciona</option>
                            <option value="1">Pastor aleman</option>
                            <option value="2">Chihuahua</option>
                            <option value="3">Buldog</option>
                            <option value="4">Labrador</option>
                            <option value="5">Rottweiler</option>
                            <option value="6">Pomerania</option>
                            <option value="7">Husky</option>
                            <option value="8">Gran Danes</option>
                            <option value="9">Dalmata</option>
                            <option value="10">Pit bull</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="text" class="form-control form-control-sm" id="fecha_nacimiento" name="fecha_nacimiento" aria-describedby="fecha_nacimiento_help">
                    </div>
                    <div class="form-group">
                        <label for="propietario">Propietario</label>
                        <input type="text" class="form-control form-control-sm" id="Nombre_propietario" name="Nombre_propietario" aria-describedby="Nombre_propietario_help">
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