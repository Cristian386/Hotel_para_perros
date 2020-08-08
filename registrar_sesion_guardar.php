<?php
require_once './conexion.php';
?>

<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['segundp_apellido']) || empty($_POST['segundo_apellido'])
    || !isset($_POST['correo']) || empty($_POST['correo']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['contrasena']) || empty($_POST['contrasena']) || strlen($_POST['contrasena']) < 8
    || $_POST['contrasena'] != $_POST['contrasena_confirma']
) 

$sql = <<<fin
insert into citas set
    nombre = :nombre
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , correo = :correo
    , contrasena = :contrasena
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':correo' => $_POST['correo']
    , ':contrasena' => password_hash($_POST['contrasena'], PASSWORD_BCRYPT, ['cost' =>12])
]);
header('Location: index.php?info=Registro realizado exitosamente');
?>