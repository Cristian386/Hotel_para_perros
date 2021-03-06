<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de mascotas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    
                    Mascota <i class="fa fa-heart"></i>
                   
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width:20%;" scope="col">Nombre</th>
                                <th style="width:20%;" scope="col">Fecha nacimiento</th>
                                <th style="width:10%;" scope="col">
                                    <a class="btn btn-primary btn-sm" href="mascota_formulario.php"><i class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        <?php
                        $sql = 'select id, nombre, fecha_nacimiento from mascota order by nombre asc';
                        foreach ($conn->query($sql) as $registro) {
                            $registro['nombre'] = htmlentities($registro['nombre']);
                            $registro['fecha_nacimiento'] = htmlentities($registro['fecha_nacimiento']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['nombre']}</td>
                            <td scope="row">{$registro['fecha_nacimiento']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="mascota_editar.php?id={$registro['id']}"><i class="fa fa-edit"></i></a>
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
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
           
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>