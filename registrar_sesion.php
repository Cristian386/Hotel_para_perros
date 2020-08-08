<?php
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
<body background="img/30.jpg" class="card bg-dark text-white" alt="Responsive image">
    <div class="container mt-3">
        <div class="card-img-overlay">
            <div class="card-header">
                <i class=""></i> <h3>REGISTRO</h3>
            </div>
            <div class="card-body">  
                <form action="registrar_sesion_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre </label>
                        <input type="text" class="form-text text-muted" id="nombre" name="nombre" aria-describedby="nombre_help" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-text text-muted" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido </label>
                        <input type="text" class="form-text text-muted" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electronico </label>
                        <input type="email" class="form-text text-muted" id="correo" name="correo" aria-describedby="correo_help" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-text text-muted" id="contrasena" name="contrasena" aria-describedby="contrasena_help" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena_confirma">Contraseña (confirma)</label>
                        <input type="password" class="form-text text-muted" id="contrasena_confirma" name="contrasena_confirma" aria-describedby="contrasena_help" required>
                    </div>

                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>