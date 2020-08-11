<?php 
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['mascota_id']) || empty($_POST['mascota_id'])
    || !isset($_POST['hoteleria']) || empty($_POST['hoteleria'])
    || !isset($_POST['estetica']) || empty($_POST['estetica'])
    || !isset($_POST['guarderia1']) || empty($_POST['guarderia1'])
    || !isset($_POST['guarderia2']) || empty($_POST['guarderia2'])
    || !isset($_POST['subtotal']) || empty($_POST['subtotal'])
) 


require_once './conexion.php';
$sql = <<<fin
insert into servicio_adquirido set
    mascota_id = :mascota_id
    , hoteleria = :hoteleria
    , estetica = :estetica
    , guarderia1 = :guarderia1
    , guarderia2 = :guarderia2
    , subtotal = :subtotal
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':mascota_id' => $_POST['mascota_id']
    , ':hoteleria' => $_POST['hoteleria']
    , ':estetica' => $_POST['estetica']
    , ':guarderia1' => $_POST['guarderia1']
    , ':guarderia2' => $_POST['guarderia2']
    , ':subtotal' => $_POST['subtotal']
]);
header('Location: servicios_adquiridos.php?info=Servicio registrado exitosamente');
?>