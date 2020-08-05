<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta/edición de clientes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HOTEL PARA PERROS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="DogPark_CAC.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catalogos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cliente.html"><i class="fa fa-user"></i>Cliente</a>
                        <a class="dropdown-item" href="mascota.html"><i class="fa fa-heart"></i>Mascota</a>
                        <a class="dropdown-item" href="personal.html"><i class="fa fa-users"></i>Personal</a>
                        <a class="dropdown-item" href="servicios_adquiridos.html"><i class="fa fa-tools"></i>Servicios adquiridos</a>
                        <a class="dropdown-item" href="detalle_servicios_adquiridos.html"><i class="fa fa-shopping-cart"></i>Detalle servicios adquiridos</a>
                        <a class="dropdown-item" href="servicio.html"><i class="fa fa-shopping-bag"></i>Servicio</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                
            </form>
        </div>
    </nav>


        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    
                    Cliente <i class="fa fa-user"></i>
                   
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width:20%;" scope="col">Nombre</th>
                                <th style="width:20%;" scope="col">Primer apellido</th>
                                <th style="width:20%;" scope="col">Segundo apellido</th>
                                <th style="width:15%;" scope="col">Telefono celular</th>
                                <th style="width:10%;" scope="col">
                                    <a class="btn btn-primary btn-sm" href="cliente_formulario.html"><i class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Juan</td>
                                <td scope="row">Pérez</td>
                                <td scope="row">Hernandez</td>
                                <td scope="row">7222134515</td>
                                <td>
                                    <a class="btn btn-secondary btn-sm" href="cliente_formulario.html"><i class="fa fa-edit"></i></a>
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
    <?php
    
    ?>