<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html'); ?>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    
                    Servicios adquiridos <i class="fa fa-tools"></i>
                   
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width:20%;" scope="col">Mascota id</th>
                                <th style="width:20%;" scope="col">Hoteleria</th>
                                <th style="width:20%;" scope="col">Estetica</th>
                                <th style="width:20%;" scope="col">Guarderia1</th>
                                <th style="width:20%;" scope="col">Guarderia2</th>
                                <th style="width:20%;" scope="col">Subtotal</th>
                                </th>
                                <th style="width:10%;" scope="col">
                                    <a class="btn btn-primary btn-sm" href="servicios_adquiridos_formulario.php"><i class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = 'select id, mascota_id ,hoteleria, estetica , guarderia1, guarderia2,subtotal from servicio_adquirido order by mascota_id asc';
                        foreach ($conn->query($sql) as $registro) {
                            $registro['mascota_id'] = htmlentities($registro['mascota_id']);
                            $registro['hoteleria'] = htmlentities($registro['hoteleria']);
                            $registro['estetica'] = htmlentities($registro['estetica']);
                            $registro['guarderia1'] = htmlentities($registro['guarderia1']);
                            $registro['guarderia2'] = htmlentities($registro['guarderia2']);
                            $registro['subtotal'] = htmlentities($registro['subtotal']);
                        echo <<<fin

                        <tr>
                            <td scope="row">{$registro['mascota_id']}</td>
                            <td scope="row">{$registro['hoteleria']}</td>
                            <td scope="row">{$registro['estetica']}</td>
                            <td scope="row">{$registro['guarderia1']}</td>
                            <td scope="row">{$registro['guarderia2']}</td>
                            <td scope="row">{$registro['subtotal']}</td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="servicio_adquirido_editar.php?id={$registro['id']}"><i class="fa fa-edit"></i></a>
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
            
          </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>