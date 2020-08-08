<?php
require_once './revisa_sesion.php';
require_once './conexion.php';
?>
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
<?php readfile('./menu.html'); ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user"></i> Clientes
                <a class="btn btn-ligth btn-sm float-rigth " href="cliente.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="cliente_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help">
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" aria-describedby="primer_apellido_help">
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" aria-describedby="segundo_apellido_help">
                    </div>
                    <div class="form-group">
                        <label for="estado_id">Estado</label>
                        <select class="form-control form-control-sm" id="estado_id" name="estado_id" aria-describedby="estado_id_help">
                        <option value="" selected>Selecciona</option>
                        <?php
                        $sql = 'select id, estado from estados order by estado asc';
                        foreach($conn->query($sql) as $registro){
                            echo <<<fin
                            <option value="{$registro['id']}">{$registro['estado']} </option>
fin;
                        }
                        ?>
                    </select> 
                    </div>
                    <div class="form-group">
                        <label for="municipio_id">Municipio</label>
                        <select type="text" class="form-control form-control-sm" id="municipio_id" name="municipio_id">
                            <option value="" selected>Selecciona</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="localidad">Localidad</label>
                        <input type="text" class="form-control form-control-sm" id="localidad" name="localidad" aria-describedby="localidad_help">
                    </div>
                    <div class="form-group">
                        <label for="telefono_celular">Telefono celular</label>
                        <input type="tel" class="form-control form-control-sm" id="telefono_celular" name="telefono_celular" aria-describedby="telefono_celular_help">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="femenino">
                            <label class="form-check-label" for="sexo1">Femenino</label>
                            &nbsp;
                            <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="masculino">
                            <label class="form-check-label" for="sexo2">Masculino</label>
                          </div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(function(e) {
        $('#estado_id').change(function (e) {
        $('#municipio_id').load('estados_municipios.php?estado_id=' + $(this).val());
        })
    })
    </script>
</body>
</html>