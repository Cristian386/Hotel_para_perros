<?php
if (!isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    header('Location:citas.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
select
    id
    , nombre
    , primer_apellido
    , segundo_apellido
    , telefono_oficina
    , numero_celular
    , correo
    , contrasena
    , tipo
    , dias_cita
    , apartado
from
    citas
where
    id = :id
fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([':id' => $_REQUEST['id']]);
$cita = $sentencia->fetch(PDO::FETCH_ASSOC);
if (false == $cita) {
    header('Location: citas.php?info=No se encontró la cita');
    exit;
}
$cita['dias_cita'] = explode(',', $cita['dias_cita']);
$dias = ['lunes','martes','miércoles','jueves','viernes','sábado','domingo'];
// foreach ($dias as $index => $dia) {
//     $usuario[$dia]
// }
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de usuarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-light btn-sm float-right" href="citas.php"><i class="fa fa-arrow-circle-left"></i> regresar</a>
                <i class="fa fa-users"></i> Citas
            </div>
            <div class="card-body">
                <form action="citas_actualizar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help" value="<?php echo htmlentities($cita['nombre']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help" value="<?php echo htmlentities($cita['primer_apellido']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help" value="<?php echo htmlentities($cita['segundo_apellido']);?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono_oficina">Teléfono de oficina</label>
                        <input type="text" class="form-control form-control-sm" id="telefono_oficina" name="telefono_oficina" aria-describedby="telefono_oficina_help" value="<?php echo htmlentities($cita['telefono_oficina']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_celular">Número de celular</label>
                        <input type="tel" class="form-control form-control-sm" id="numero_celular" name="numero_celular" aria-describedby="numero_celular_help" value="<?php echo htmlentities($cita['numero_celular']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control form-control-sm" id="correo" name="correo" aria-describedby="correo_help" value="<?php echo htmlentities($cita['correo']);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" aria-describedby="contrasena_help" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena_confirma">Contraseña (confirma)</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena_confirma" name="contrasena_confirma" aria-describedby="contrasena_help" required>
                    </div>
                    <div class="form-group">
                    <label for="tipo">Citas</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="cachorro1" value="cachorro" <?php echo 'cachorro' == $cita['tipo'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="cachorro1">Cachorro</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="tipo" id="adulto1" value="adulto" <?php echo 'adulto' == $cita['tipo'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="adulto1">Adulto</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dias_trabaja1">Días en que agenda cita</label><br>
                        <?php
                        foreach ($dias as $indice => $dia) {
                            $checked = in_array($dia, $cita['dias_cita']) ? 'checked' : '';
                            echo <<<fin
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="dias_cita[]" id="dias_cita{$indice}" value="{$dia}" {$checked}>
                            <label class="form-check-label" for="dias_cita{$indice}">{$dia}</label>
                            &nbsp;
                        </div>
fin;
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="apartado">Apartado</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="apartado" id="apartado1" value="si" <?php echo 'si' == $cita['apartado'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="apartado1">No</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="apartado" id="apartado2" value="no" <?php echo 'no' == $cita['apartado'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="apartado2">Si</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                    <input type="hidden" name="id" value="<?php echo $cita['id'];?>">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>