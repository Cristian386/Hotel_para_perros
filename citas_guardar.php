<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['telefono_oficina']) || empty($_POST['telefono_oficina'])
    || !isset($_POST['numero_celular']) || empty($_POST['numero_celular'])
    || !isset($_POST['correo']) || empty($_POST['correo']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['tipo']) || !in_array($_POST['tipo'], ['cachorro', 'adulto'])
    || !isset($_POST['dias_cita']) || !is_array($_POST['dias_cita'])
    || !isset($_POST['apartado']) || !in_array($_POST['apartado'], ['si', 'no'])
    || !isset($_POST['contrasena']) || empty($_POST['contrasena']) || strlen($_POST['contrasena']) < 8
    || $_POST['contrasena'] != $_POST['contrasena_confirma']
) {
    header('Location: citas_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into citas set
    nombre = :nombre
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , telefono_oficina = :telefono_oficina
    , numero_celular = :numero_celular
    , correo = :correo
    , contrasena = :contrasena
    , tipo = :tipo
    , dias_cita = :dias_cita
    , apartado = :apartado
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono_oficina' => $_POST['telefono_oficina']
    , ':numero_celular' => $_POST['numero_celular']
    , ':correo' => $_POST['correo']
    , ':contrasena' => password_hash($_POST['contrasena'], PASSWORD_BCRYPT, ['cost' =>12])
    , ':tipo' => $_POST['tipo']
    , ':dias_cita' => implode(',', $_POST['dias_cita'])
    , ':apartado' => $_POST['apartado']
]);
header('Location: citas.php?info=Cita realizada exitosamente');
?>