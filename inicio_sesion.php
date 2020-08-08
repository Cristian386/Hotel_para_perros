<?php
//print_r($_POST);
//exit;
if (
    !isset($_POST['correo']) 
    || empty($_POST['correo'])
    || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL) 
    || !isset($_POST['contrasena'])
    || empty($_POST['contrasena'])
    ) {
    header('Location: index.php? info=Escribe tu correo y contraseña');
    exit;    
    }
    require_once './conexion.php';
$sql = 'select id, nombre, tipo, contrasena from citas where correo = :correo  limit 1';
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':correo' => $_POST['correo']]);
$citas = $sentencia->fetch(PDO::FETCH_ASSOC);

if (false == $citas) {
    header('Location: index.php?info=Usuario no encontrado: ' . $_POST['correo']);
    exit;
}
if (!password_verify ($_POST['contrasena'], $citas['contrasena'])) {
    header('Location: index.php?=Usuario o contrasena incorrectos');
    exit;
}
session_start();
$_SESSION['id'] = $citas['id'];
$_SESSION['nombre'] = $citas['nombre'];
$_SESSION['correo'] = $citas['correo'];
header('Location: DogPark_CAC.php');
?>