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
                <i class="fa fa-shopping-cart"></i> Servicio adquirido formulario
                <a class="btn btn-ligth btn-sm float-rigth " href="servicios_adquiridos.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="usuarios_guardar.php" method="post">
                    <div class="form-group">
                        <label for="Nombre_mascota">Nombre mascota</label>
                        <input type="text" class="form-control form-control-sm" id="Nombre_mascota" name="Nombre_mascota" aria-describedby="Nombre_mascota_help">
                    </div>
                    <div class="form-group">
                        <label for="hoteleria">Hoteleria</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hoteleria" id="si" value="si">
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="hoteleria" id="no" value="no">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="estetica">Estetica</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estetica" id="si" value="si">
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="estetica" id="no" value="no">
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="guarderia">Guarderia</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="guarderia" id="tipo_1" value="tipo_1">
                            <label class="form-check-label" for="tipo_1">6 horas</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="guarderia" id="tipo_2" value="tipo_2">
                            <label class="form-check-label" for="tipo_2">12 horas</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="estetica" id="no" value="no">
                            <label class="form-check-label" for="no">No</label>
                          </div>
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