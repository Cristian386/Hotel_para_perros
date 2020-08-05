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
                                <th style="width:20%;" scope="col">Nombre mascota</th>
                                <th style="width:20%;" scope="col">Hoteleria</th>
                                <th style="width:20%;" scope="col">Estetica</th>
                                <th style="width:20%;" scope="col">Guarderia</th>
                                <th style="width:20%;" scope="col">Precio</th>
                                </th>
                                <th style="width:10%;" scope="col">
                                    <a class="btn btn-primary btn-sm" href="servicios_adquiridos_formulario.php"><i class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Negrito</td>
                                <td scope="row">Si</td>
                                <td scope="row">si</td>
                                <td scope="row">no</td>  
                                <td scope="row">1800</td>
                                <td>
                                    <a class="btn btn-secondary btn-sm" href="servicios_adquiridos_editar.php"fa fa-edit"></i></a>
                                </td>
                            </tr>
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