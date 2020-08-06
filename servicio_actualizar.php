
<?php
if (
    !isset($_POST['tipo_servicio']) || empty($_POST['tipo_servicio'])
    || !isset($_POST['descripcion']) || empty($_POST['descripcion'])
    || !isset($_POST['precio']) || empty($_POST['precio'])
) {
    header('Location: servicio_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
updste into servicio set
    tipo_servicio = :tipo_servicio
    , descripcion = :descripcion
    , precio = :precio
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':tipo_servicio' => $_POST['tipo_servicio']
    , ':descripcion' => $_POST['descripcion']
    , ':precio' => $_POST['precio']
]);
header('Location: servicio.php?info=Cita realizada exitosamente');
?>

