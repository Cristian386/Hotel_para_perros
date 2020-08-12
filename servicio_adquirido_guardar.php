<?php 
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['hoteleria']) || empty($_POST['hoteleria'])
    || !isset($_POST['estetica']) || empty($_POST['estetica'])
    || !isset($_POST['guarderia1']) || empty($_POST['guarderia1'])
    || !isset($_POST['guarderia2']) || empty($_POST['guarderia2'])
    
) 


require_once './conexion.php';
$sql = <<<fin
insert into servicio_adquirido set
    nombre = :nombre
    , hoteleria = :hoteleria
    , estetica = :estetica
    , guarderia1 = :guarderia1
    , guarderia2 = :guarderia2
     
fin;

$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':hoteleria' => $_POST['hoteleria']
    , ':estetica' => $_POST['estetica']
    , ':guarderia1' => $_POST['guarderia1']
    , ':guarderia2' => $_POST['guarderia2']

]);
header('Location: servicios_adquiridos.php?info=Servicio registrado exitosamente');
?>