<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
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
                <i class="fa fa-users"></i> Personal
                <a class="btn btn-ligth btn-sm float-rigth " href="personal.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="personal_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help">
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help">
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help">
                    </div>
                    <div class="form-group">
                        <label for="numero_celular">Telefono celular</label>
                        <input type="tel" class="form-control form-control-sm" id="telefono_celular" name="telefono_celular" aria-describedby="telefono_celular_help">
                    </div>
                    <div class="form-group">
                        <label for="especialidad">Especialidad</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="especialidad" id="especialidad1" value="Veterinario">
                            <label class="form-check-label" for="especialidad1">Veterinario</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="especialidad" id="especialidad2" value="Cuidador">
                            <label class="form-check-label" for="especialidad2">Cuidador</label>´
                            &nbsp;
                            <input class="form-check-input" type="radio" name="especialidad" id="especialidad3" value="Limpiador">
                            <label class="form-check-label" for="especialidad3">Limpiador</label>
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