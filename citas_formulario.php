<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="citas.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-users"></i> Citas
            </div>
            <div class="card-body">
                <form action="citas_guardar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help">
                    </div>
                    <div class="form-group">
                        <label for="telefono_oficina">Teléfono de oficina</label>
                        <input type="text" class="form-control form-control-sm" id="telefono_oficina" name="telefono_oficina" aria-describedby="telefono_oficina_help" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_celular">Número de celular</label>
                        <input type="tel" class="form-control form-control-sm" id="numero_celular" name="numero_celular" aria-describedby="numero_celular_help" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control form-control-sm" id="correo" name="correo" aria-describedby="correo_help" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" aria-describedby="contrasena_help" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena_confirma">Contraseña (confirma)</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena_confirma" name="contrasena_confirma" aria-describedby="contrasena_help" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo de cachorro</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="cachorro1" value="cachorro">
                            <label class="form-check-label" for="cachorro1">Cachorro</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo" id="adulto1" value="adulto">
                            <label class="form-check-label" for="adulto1">Adulto</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dias_trabaja1">Días en que ajenda su cita</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita1" value="lunes">
                            <label class="form-check-label" for="dias_cita1">lunes</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita2" value="martes">
                            <label class="form-check-label" for="dias_cita2">martes</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita3" value="miércoles">
                            <label class="form-check-label" for="dias_cita3">miércoles</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita4" value="jueves">
                            <label class="form-check-label" for="dias_cita4">jueves</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita5" value="viernes">
                            <label class="form-check-label" for="dias_cita5">viernes</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita6" value="sábado">
                            <label class="form-check-label" for="dias_cita6">sábado</label>
                            &nbsp;
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita7" value="domingo">
                            <label class="form-check-label" for="dias_cita7">domingo</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apartado">Apartado</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="apartado" id="apartado1" value="si">
                            <label class="form-check-label" for="apartado1">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="apartado" id="apartado2" value="no">
                            <label class="form-check-label" for="apartado2">No</label>
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