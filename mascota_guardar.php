<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['raza_id']) || empty($_POST['raza_id'])
    || !isset($_POST['fecha_nacimiento']) || empty($_POST['fecha_nacimiento'])
) {
    header('Location: mascota_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into mascota set
    nombre = :nombre
    , raza_id = :raza_id
    , fecha_nacimiento = :fecha_nacimiento
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':raza_id' => $_POST['raza_id']
    , ':fecha_nacimiento' => $_POST['fecha_nacimiento']
]);
header('Location:mascota.php?info=Mascota registrada exitosamente');
?>