<?php
require_once './conexion.php';
$sql = 'select id, municipio from municipios where estado_id = :estado_id order by municipio asc';
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':estado_id' => $_REQUEST['estado_id']]);
foreach ($sentencia->fetchAll() as $registro) {
    echo <<<fin

<option value="{$registro['id']}">{$registro['municipio']} </option>
fin;
}
?>

