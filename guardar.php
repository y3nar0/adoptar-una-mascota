<?php
    require_once 'conexion.php';
    $link = Conectarse();

    if (isset($_POST['agregarM'])) {
        $tipo = $_POST['mod-tipo-m'];
        $nombre = $_POST['mod-nombre-m'];
        $edad = $_POST['mod-edad-m'];
        $raza = $_POST['mod-raza-m'];
        $descripcion = $_POST['mod-descripcion-m'];
        $im = $_FILES['mod-imagen-m'];

        if($tipo==NULL|$nombre==NULL|$edad==NULL|$raza==NULL|$descripcion==NULL|$im==NULL) {
            mysqli_close($link);
            echo "<h1>ERROR: Un campo esta vacio</h1>";
        } else {
            $query = mysqli_query($link,"select max(id) from mascotas;");
            $ultimo = mysqli_fetch_array($query);

            if($ultimo[0] != NULL) {
                $ultimo[0] = $ultimo[0] + 1;
            } else {
                $ultimo[0] = 1;
            }

            $directorio = 'images/mascotas/';
            $imagen_tam = $_FILES['mod-imagen-m']['size'];
            $imagen_tipo = $_FILES['mod-imagen-m']['type'];
            $imagen_ruta = $_FILES['mod-imagen-m']['tmp_name'];

            $ruta_archivo = $directorio.basename($ultimo[0])."_".basename($nombre).".".basename($imagen_tipo);
            $ruta_archivo_2 = $ultimo[0]."_".$nombre.".".basename($imagen_tipo);
            $tipo_archivo = strtolower(pathinfo($ruta_archivo, PATHINFO_EXTENSION));
    
            $valido = 3;

            if ($imagen_tam > 1048576) {
                echo "<h1>ERROR: La imagen es muy grande</h1>";
                $valido = $valido-1;
                mysqli_close($link);
            }
            if ($tipo_archivo != "jpg" && $tipo_archivo != "png" && $tipo_archivo != "gif" && $tipo_archivo != "jpeg") {
                echo "<h1>ERROR: La imagen no tiene un formato valido</h1>";
                $valido = $valido-1;
                mysqli_close($link);
            }

            if ($valido == 3) {
                $query = 'INSERT INTO mascotas (tipo, nombre, edad, raza, descripcion, imagen)
                        VALUES (\''.$tipo.'\',\''.$nombre.'\',\''.$edad.'\',\''.$raza.'\',\''.$descripcion.'\',\''.$ruta_archivo_2.'\');';

                //mysqli_query($link,$query) or die(mysqli_error());
                if (mysqli_query($link,$query)) {
                    move_uploaded_file($imagen_ruta, $ruta_archivo);
                    mysqli_close($link);
                    echo "<h1>Guardando Datos...</h1>";
                } else {
                    mysqli_close($link);
                    echo "Algo salio mal, intenta nuevamente";
                }

                // header('location: usuario.php');
                //exit();
            }
        }
    } else {
        if (isset($_POST['agregarU'])) {
            $nombre = $_POST['mod-nombre-u'];
            $telefono = $_POST['mod-telefono-u'];
            $ciudad = $_POST['mod-ciudad-u'];
            $email = $_POST['mod-email-u'];
            $edad = $_POST['mod-edad-u'];
            $genero = $_POST['mod-gen-u'];
            
            if($nombre==NULL|$telefono==NULL|$ciudad==NULL|$email==NULL|$edad==NULL|$genero==NULL) {
                mysqli_close($link);
                echo "<h1>ERROR: Un campo esta vacio</h1>";
            } else {
                $query = 'INSERT INTO usuarios (nombre, telefono, ciudad, email, edad, genero)
                        VALUES (\''.$nombre.'\',\''.$telefono.'\',\''.$ciudad.'\',\''.$email.'\',\''.$edad.'\',\''.$genero.'\');';
                
                if (mysqli_query($link,$query)) {
                    mysqli_close($link);
                    echo "<h1>Guardando Datos...</h1>";
                } else {
                    mysqli_close($link);
                    echo "Algo salio mal, intenta nuevamente";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardando</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
</head>
<body>
    <script>
        setTimeout(function () {
            window.location.href= 'index.php';
        }, 2000);
    </script>
</body>
</html>