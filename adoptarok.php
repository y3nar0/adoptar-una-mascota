<?php
    require_once 'conexion.php';
    $link = Conectarse();

    $adopciones = $_GET['a'];
    $usuario = $_GET['u'];
    $mascota = $_GET['m'];

    $adopciones=$adopciones+1;

    $query = mysqli_query($link,"update usuarios set adopciones='$adopciones' where id='$usuario';");
    $query = mysqli_query($link,"update mascotas set adoptado=1, id_usuario='$usuario' where id='$mascota';");

    echo "<h1>Modificando Informacion...</h1>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptando</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style-listar.css">
</head>
<body>
    <script>
        // Usando setTimeout para ejecutar una función después de 5 segundos.
        setTimeout(function () {
            // Redirigir con JavaScript
            window.location.href= 'listarU.php';
        }, 2000);
    </script>
</body>
</html>