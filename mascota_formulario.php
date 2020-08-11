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
                <i class="fa fa-heart"></i> Mascotas
                <a class="btn btn-ligth btn-sm float-rigth " href="mascota.php"><i class="fa fa-arrow-circle-left"> regresar</i></a>
            </div>
            <div class="card-body">
                <form action="mascota_guardar.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre_help">
                    </div>
                    <div class="form-group">
                        <label for="raza_id">raza</label>
                        <select class="form-control form-control-sm" id="raza_id" name="raza_id" aria-describedby="raza_id_help">
                        <option value="" selected>Selecciona</option>
                        <?php
                        $sql = 'select id, nombre from raza order by nombre asc';
                        foreach($conn->query($sql) as $registro){
                            echo <<<fin
                            <option value="{$registro['id']}">{$registro['nombre']} </option>
fin;
                        }
                        ?>
                    </select> 
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" step="1" min="1980-01-01" max="2100-12-31" value="<?php echo date("Y-m-d");?>">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-save"></i> guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>