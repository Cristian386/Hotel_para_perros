
<?php
if (
    !isset($_POST['nombre_mascota']) || empty($_POST['nombre_mascota'])
    || !isset($_POST['hoteleria']) || empty($_POST['hoteleria'])
    || !isset($_POST['estetica']) || empty($_POST['estetica'])
    || !isset($_POST['guarderia']) || empty($_POST['guarderia'])
) {
    header('Location: servicios_adquiridos_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
update servicio_adquirido set
    nombre_mascota = :nombre_mascota
    , hoteleria = :hoteleria
    , estetica = :estetica
    , guarderia = :guarderia
    where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre_mascota' => $_POST['nombre_mascota']
    , ':hoteleria' => $_POST['hoteleria']
    , ':estetica' => $_POST['estetica']
    , ':guarderia' => $_POST['guarderia']
]);
header('Location: servicios_adquiridos.php?info=Servicio registrado exitosamente');
?>
