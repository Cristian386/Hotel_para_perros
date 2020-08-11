<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    
                    Servicio <i class="fa fa-shopping-bag"></i>
                   
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width:30%;" scope="col">Tipo servicio</th>
                                <th style="width:50%;" scope="col">Descripcion</th>
                                <th style="width:20%;" scope="col">Precio</th>
                                </th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = 'select id, tipo_servicio, descripcion, precio from servicio order by tipo_servicio asc';
                        foreach ($conn->query($sql) as $registro) {
                            $registro['descripcion'] = htmlentities($registro['descripcion']);
                            $registro['precio'] = htmlentities($registro['precio']);
                            
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['tipo_servicio']}</td>
                            <td scope="row">{$registro['descripcion']}</td>
                            <td scope="row">{$registro['precio']}</td>

                        </tr>
fin;
                }
                        ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
           
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>

    