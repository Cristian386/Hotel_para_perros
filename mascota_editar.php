<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location:mascota.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id
    , nombre
    , raza
    , fecha_nacimiento
    , propietario
from
    mascota
where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cita = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cita) {
    header('Location: mascota.php?info=No se encontró la mascota');
    exit;
}

?>
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
                <i class="fa fa-user"></i> Mascota
                <a class="btn btn-ligth btn-sm float-rigth " href="mascota.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="mascota_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" value="<?php echo htmlentities($cita['nombre']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="raza">Raza</label>
                        <input type="text" class="form-control form-control-sm" id="raza" name="raza" aria-describedby="raza_help" value="<?php echo htmlentities($cita['raza']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha nacimiento</label>
                        <input type="text" class="form-control form-control-sm" id="fecha_nacimiento" name="fecha_nacimiento" aria-describedby="fecha_nacimiento_help" value="<?php echo htmlentities($cita['fecha_nacimiento']);?>" required>
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