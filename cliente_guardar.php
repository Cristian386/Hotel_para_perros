<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
    || !isset($_POST['estado']) || empty($_POST['estado'])
    || !isset($_POST['municipio']) || empty($_POST['municipio'])
    || !isset($_POST['localidad']) || empty($_POST['localidad']) 
    || !isset($_POST['telefono_celular']) || !is_array($_POST['telefono_celular'])
    || !isset($_POST['sexo']) || !in_array($_POST['sexo'], ['sexo1', 'sexo2'])
) {
    header('Location: cliente_formulario.php?info=Parámetros incorrectos');
    exit;
}

require_once './conexion.php';
$sql = <<<fin
insert into cliente set
    nombre = :nombre
    , primer_apellido = :primer_apellido
    , segundo_apellido = :segundo_apellido
    , estado = :estado
    , municipio = :municipio
    , localidad = :localidad
    , telefono_celular = :telefono_celular
    , sexo = :sexo
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':estado' => $_POST['estado']
    , ':municipio' => $_POST['municipio']
    , ':localidad' => $_POST['localidad']
    , ':telefono_celular' => $_POST['telefono_celular']
    , ':sexo' => $_POST['sexo']
]);
header('Location: cliente.php?info=Cliente registrado exitosamente');
?>