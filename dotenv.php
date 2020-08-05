<?php
require_once './conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_ENV['TITULO']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php readfile('./menu.html');?>
<?php
$sql = 'select id, estado from estados order by estado asc';
foreach ($conn->query($sql) as $registro) {
    echo "\n<br>" . $registro['id'] . ' = ' . $registro['estado'];
}
?>
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</body>
</html>