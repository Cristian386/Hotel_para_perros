<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body background="img/30.jpg" class="card bg-dark text-white" alt="Responsive image">
    <div class="container mt-3">
        <div class="card-img-overlay">
            <div class="card-header">
                <i class="fa fa-heart"></i> Inicio de sesion
            </div>
            <div class="card-body">  
                <form action="inicio_sesion.php" method="post">
                    <div class="form-group">
                        <label for="correo">Correo electronico</label>
                        <input type="email" class="form-control form-control-sm" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" required>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> Enviar</button>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> Registrarse</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</body>
</html>

