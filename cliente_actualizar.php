<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
    || !isset($_POST['estado_id']) || empty($_POST['estado_id'])
    || !isset($_POST['municipio_id']) || empty($_POST['municipio_id'])
    || !isset($_POST['localidad']) || empty($_POST['localidad']) 
    || !isset($_POST['telefono_celular']) || !is_array($_POST['telefono_celular'])
    || !isset($_POST['sexo']) || !in_array($_POST['sexo'], ['sexo1', 'sexo2'])
) 
require_once './conexion.php';
$sql = <<<fin
update cliente set
    nombre = :nombre
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , estado_id = :estado_id
    , municipio_id = :municipio_id
    , localidad = :localidad
    , telefono_celular = :telefono_celular
    , sexo = :sexo
    where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':estado_id' => $_POST['estado_id']
    , ':municipio_id' => $_POST['municipio_id']
    , ':localidad' => $_POST['localidad']
    , ':telefono_celular' => $_POST['telefono_celular']
    , ':sexo' => $_POST['sexo']
    , ':id' => $_POST['id']

]);
header('Location: cliente.php?info=Cita actualizada exitosamente');
?>