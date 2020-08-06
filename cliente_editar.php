<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location:ciente.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id
    , nombre
    , primer_apellido
    , segundo_apellido
    , estado
    , municipio
    , localidad
    , telefono_celular
    , sexo
from
    cliente
where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cita = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cita) {
    header('Location: cliente.php?info=No se encontró el cliente');
    exit;
}

?>




<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de clientes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user"></i> Clientes
                <a class="btn btn-ligth btn-sm float-rigth " href="cliente.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="cliente_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" value="<?php echo htmlentities($cita['nombre']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" value="<?php echo htmlentities($cita['primer_apellido']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help" value="<?php echo htmlentities($cita['segundo_apellido']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="estado" name="estado" aria-describedby="estado_help" value="<?php echo htmlentities($cita['estado']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control form-control-sm" id="municipio" name="municipio" aria-describedby="municipio_help" value="<?php echo htmlentities($cita['municipio']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" class="form-control form-control-sm" id="localidad" name="localidad" aria-describedby="localidad_help" value="<?php echo htmlentities($cita['localidad']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono_celular">Telefono celular</label>
                        <input type="tel" class="form-control form-control-sm" id="telefono_celular" name="telefono_celular" aria-describedby="telefono_celular_help" value="<?php echo htmlentities($cita['telefono_celular']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="femenino" <?php echo 'femenino' == $cita['sexo'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="sexo1">Femenino</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="masculino" <?php echo 'masculino' == $cita['sexo'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="sexo2">Masculino</label>
                          </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id" value="<?php echo $cita['id'];?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>