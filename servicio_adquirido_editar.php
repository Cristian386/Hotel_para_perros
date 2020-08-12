<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location:servicios_adquiridos.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id
    , nombre
    , hoteleria
    , estetica
    , guarderia1
    , guarderia2
    
from
    servicio_adquirido
where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cita = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cita) {
    header('Location: servicios_adquiridos.php?info=No se encontró el servicio que adquirido');
    exit;
}

?>

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
                <i class="fa fa-shopping-cart"></i> Servicio adquirido formulario
                <a class="btn btn-ligth btn-sm float-rigth " href="servicios_adquiridos.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="servicio_adquirido_actualizar.php" method="post">
                <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" required value="<?php echo htmlentities($cita['nombre']);?>" required>
                    
                    </div>
                    <div class="form-group">
                        <label for="hoteleria">Hoteleria</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hoteleria" id="si" value="1500" <?php echo '1500' == $cita['hoteleria'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="hoteleria" id="no" value="0" <?php echo '0' == $cita['hoteleria'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="estetica">Estetica</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estetica" id="si" value="500" <?php echo '500' == $cita['estetica'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="estetica" id="no" value="0" <?php echo '0' == $cita['estetica'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="guarderia1">Guarderia 6 horas</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="guarderia1" id="si" value="600" <?php echo '600' == $cita['guarderia1'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="guarderia1" id="no" value="0" <?php echo '0' == $cita['guarderia1'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="no">No</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="guarderia2">Guarderia 12 horas</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="guarderia2" id="si" value="1200" <?php echo '1200' == $cita['guarderia2'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="si">Si</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="guarderia2" id="no" value="0" <?php echo '0' == $cita['guarderia2'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="no">No</label>
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