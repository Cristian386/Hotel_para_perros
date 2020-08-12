<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
    || !isset($_POST['telefono_celular']) || empty($_POST['telefono_celular'])
    || !isset($_POST['especialidad']) || !in_array($_POST['especialidad'], ['veterinario', 'cuidador', 'limpiador'])
) 
require_once './conexion.php';
$sql = <<<fin
insert into personal set
    nombre = :nombre
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , telefono_celular = :telefono_celular
    , especialidad = :especialidad
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono_celular' => $_POST['telefono_celular']
    , ':especialidad' => $_POST['especialidad']
]);
header('Location: personal.php?info=Personal creado exitosamente');
?>