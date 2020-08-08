<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"></i> Puedes agendar tu llenando cita con los siguientes datos
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:20%;" scope="col">Nombre</th>
                            <th style="width:20%;" scope="col">Primer apellido</th>
                            <th style="width:20%;" scope="col">Correo</th>
                            <th style="width:15%;" scope="col">Tipo de canino</th>
                            <th style="width:15%;" scope="col">Apartado para cita</th>
                            <th style="width:10%;" scope="col">
                                <a class="btn btn-primary btn-sm" href="citas_formulario.php"><i class="fa fa-plus-circle"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = 'select id, nombre, primer_apellido, correo, tipo, apartado from citas order by primer_apellido, nombre asc';
                        foreach ($conn->query($sql) as $registro) {
                            $registro['nombre'] = htmlentities($registro['nombre']);
                            $registro['primer_apellido'] = htmlentities($registro['primer_apellido']);
                            $registro['correo'] = htmlentities($registro['correo']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['primer_apellido']}</td>
                            <td scope="row">{$registro['nombre']}</td>
                            <td scope="row">{$registro['correo']}</td>
                            <td scope="row">{$registro['tipo']}</td>
                            <td scope="row">{$registro['apartado']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="citas_editar.php?id={$registro['id']}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
fin;
                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>