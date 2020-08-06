<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['raza']) || empty($_POST['raza'])
    || !isset($_POST['fecha_nacimiento']) || empty($_POST['fecha_nacimiento'])
    || !isset($_POST['propietario']) || empty($_POST['propietario'])
) {
    header('Location: mascota_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update mascota set
    nombre = :nombre
    , raza = :raza
    , fecha_nacimiento = :fecha_nacimiento
    , propietario = :propietario
    where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':raza' => $_POST['raza']
    , ':fecha_nacimiento' => $_POST['fecha_nacimiento']
    , ':propietario' => $_POST['propietario']
    , 'id' => $_POST['id']
]);
header('Location:mascota.php?info=Cita realizada exitosamente');
?>