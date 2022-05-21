<?php
    require_once 'conexion.php';
    

    function Todos() {
        $link=Conectarse();

        $query = mysqli_query($link,"select max(id) from usuarios");
        $ultimo = mysqli_fetch_array($query);
        if($ultimo[0] != NULL) {
            $id_usuario = array();
            $nom_usuario = array();
            $query = mysqli_query($link,"select id, nombre from usuarios;");
            while($row=mysqli_fetch_array($query)) {
                array_push($id_usuario, $row['id']);
                array_push($nom_usuario, $row['nombre']);
            }
        }

        $query = mysqli_query($link,"select * from mascotas order by tipo,raza");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Tipo</p></div>
                <div class="celda"><p>Raza/Especie</p></div>
                <div class="celda"><p>Imagen</p></div>
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Descripcion</p></div>
                <div class="celda"><p>¿En Adopcion?</p></div>
                <div class="celda"><p>Dueño</p></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $tipo=$row['tipo'];
                $raza=$row['raza'];
                $imagen=$row['imagen'];
                $nombre=$row['nombre'];
                $edad=$row['edad'];
                $descripcion=$row['descripcion'];
                $adoptado=$row['adoptado'];
                $propietario=$row['id_usuario'];

                if($adoptado == 0) {
                    $adopcion = 'SI';
                    $duenho = '';
                } else {
                    $buscar = array_search($propietario, $id_usuario);
                    $duenho = $nom_usuario[$buscar];
                    $adopcion = 'NO';
                }

                echo 
                        "<div class='fila'>
                            <div class='celda' style='text-transform:uppercase;'><p>$tipo</p></div>
                            <div class='celda'><p>$raza</p></div>
                            <div class='celda' style='background:url(images/mascotas/$imagen);background-size:100% 100%;width:250px;height:150px'></div>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$descripcion</p></div>
                            <div class='celda'><p>$adopcion</p></div>
                            <div class='celda'><p>$duenho</p></div>
                        </div>";
            }

        } else {
            echo "<h1>LO SENTIMOS, POR EL MOMENTO NO HAY MASCOTAS<h1>";
        }
        mysqli_close($link);
    }

    function Perros() {
        $link=Conectarse();

        $query = mysqli_query($link,"select max(id) from usuarios");
        $ultimo = mysqli_fetch_array($query);
        if($ultimo[0] != NULL) {
            $id_usuario = array();
            $nom_usuario = array();
            $query = mysqli_query($link,"select id, nombre from usuarios;");
            while($row=mysqli_fetch_array($query)) {
                array_push($id_usuario, $row['id']);
                array_push($nom_usuario, $row['nombre']);
            }
        }

        $query = mysqli_query($link,"select * from mascotas where tipo='perro' order by raza");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Tipo</p></div>
                <div class="celda"><p>Raza/Especie</p></div>
                <div class="celda"><p>Imagen</p></div>
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Descripcion</p></div>
                <div class="celda"><p>¿En Adopcion?</p></div>
                <div class="celda"><p>Dueño</p></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $tipo=$row['tipo'];
                $raza=$row['raza'];
                $imagen=$row['imagen'];
                $nombre=$row['nombre'];
                $edad=$row['edad'];
                $descripcion=$row['descripcion'];
                $adoptado=$row['adoptado'];
                $propietario=$row['id_usuario'];

                if($adoptado == 0) {
                    $adopcion = 'SI';
                    $duenho = '';
                } else {
                    $adopcion = 'NO';
                    $buscar = array_search($propietario, $id_usuario);
                    $duenho = $nom_usuario[$buscar];
                }

                echo 
                        "<div class='fila'>
                            <div class='celda' style='text-transform:uppercase;'><p>$tipo</p></div>
                            <div class='celda'><p>$raza</p></div>
                            <div class='celda' style='background:url(images/mascotas/$imagen);background-size:100% 100%;width:250px;height:150px'></div>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$descripcion</p></div>
                            <div class='celda'><p>$adopcion</p></div>
                            <div class='celda'><p>$duenho</p></div>
                        </div>";
            }

        } else {
            echo "<h1>LO SENTIMOS, POR EL MOMENTO NO HAY MASCOTAS<h1>";
        }
        mysqli_close($link);
    }

    function Gatos() {
        $link=Conectarse();

        $query = mysqli_query($link,"select max(id) from usuarios");
        $ultimo = mysqli_fetch_array($query);
        if($ultimo[0] != NULL) {
            $id_usuario = array();
            $nom_usuario = array();
            $query = mysqli_query($link,"select id, nombre from usuarios;");
            while($row=mysqli_fetch_array($query)) {
                array_push($id_usuario, $row['id']);
                array_push($nom_usuario, $row['nombre']);
            }
        }

        $query = mysqli_query($link,"select * from mascotas where tipo='gato' order by raza");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Tipo</p></div>
                <div class="celda"><p>Raza/Especie</p></div>
                <div class="celda"><p>Imagen</p></div>
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Descripcion</p></div>
                <div class="celda"><p>¿En Adopcion?</p></div>
                <div class="celda"><p>Dueño</p></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $tipo=$row['tipo'];
                $raza=$row['raza'];
                $imagen=$row['imagen'];
                $nombre=$row['nombre'];
                $edad=$row['edad'];
                $descripcion=$row['descripcion'];
                $adoptado=$row['adoptado'];
                $propietario=$row['id_usuario'];

                if($adoptado == 0) {
                    $adopcion = 'SI';
                    $duenho = '';
                } else {
                    $adopcion = 'NO';
                    $buscar = array_search($propietario, $id_usuario);
                    $duenho = $nom_usuario[$buscar];
                }

                echo 
                        "<div class='fila'>
                            <div class='celda' style='text-transform:uppercase;'><p>$tipo</p></div>
                            <div class='celda'><p>$raza</p></div>
                            <div class='celda' style='background:url(images/mascotas/$imagen);background-size:100% 100%;width:250px;height:150px'></div>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$descripcion</p></div>
                            <div class='celda'><p>$adopcion</p></div>
                            <div class='celda'><p>$duenho</p></div>
                        </div>";
            }

        } else {
            echo "<h1>LO SENTIMOS, POR EL MOMENTO NO HAY MASCOTAS<h1>";
        }
        mysqli_close($link);
    }

    function Conejos() {
        $link=Conectarse();

        $query = mysqli_query($link,"select max(id) from usuarios");
        $ultimo = mysqli_fetch_array($query);
        if($ultimo[0] != NULL) {
            $id_usuario = array();
            $nom_usuario = array();
            $query = mysqli_query($link,"select id, nombre from usuarios;");
            while($row=mysqli_fetch_array($query)) {
                array_push($id_usuario, $row['id']);
                array_push($nom_usuario, $row['nombre']);
            }
        }

        $query = mysqli_query($link,"select * from mascotas where tipo='conejo' order by raza");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Tipo</p></div>
                <div class="celda"><p>Raza/Especie</p></div>
                <div class="celda"><p>Imagen</p></div>
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Descripcion</p></div>
                <div class="celda"><p>¿En Adopcion?</p></div>
                <div class="celda"><p>Dueño</p></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $tipo=$row['tipo'];
                $raza=$row['raza'];
                $imagen=$row['imagen'];
                $nombre=$row['nombre'];
                $edad=$row['edad'];
                $descripcion=$row['descripcion'];
                $adoptado=$row['adoptado'];
                $propietario=$row['id_usuario'];

                if($adoptado == 0) {
                    $adopcion = 'SI';
                    $duenho = '';
                } else {
                    $adopcion = 'NO';
                    $buscar = array_search($propietario, $id_usuario);
                    $duenho = $nom_usuario[$buscar];
                }

                echo 
                        "<div class='fila'>
                            <div class='celda' style='text-transform:uppercase;'><p>$tipo</p></div>
                            <div class='celda'><p>$raza</p></div>
                            <div class='celda' style='background:url(images/mascotas/$imagen);background-size:100% 100%;width:250px;height:150px'></div>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$descripcion</p></div>
                            <div class='celda'><p>$adopcion</p></div>
                            <div class='celda'><p>$duenho</p></div>
                        </div>";
            }

        } else {
            echo "<h1>LO SENTIMOS, POR EL MOMENTO NO HAY MASCOTAS<h1>";
        }
        mysqli_close($link);
    }

    function Otros() {
        $link=Conectarse();

        $query = mysqli_query($link,"select max(id) from usuarios");
        $ultimo = mysqli_fetch_array($query);
        if($ultimo[0] != NULL) {
            $id_usuario = array();
            $nom_usuario = array();
            $query = mysqli_query($link,"select id, nombre from usuarios;");
            while($row=mysqli_fetch_array($query)) {
                array_push($id_usuario, $row['id']);
                array_push($nom_usuario, $row['nombre']);
            }
        }

        $query = mysqli_query($link,"select * from mascotas where tipo='otro' order by raza");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Tipo</p></div>
                <div class="celda"><p>Raza/Especie</p></div>
                <div class="celda"><p>Imagen</p></div>
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Descripcion</p></div>
                <div class="celda"><p>¿En Adopcion?</p></div>
                <div class="celda"><p>Dueño</p></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $tipo=$row['tipo'];
                $raza=$row['raza'];
                $imagen=$row['imagen'];
                $nombre=$row['nombre'];
                $edad=$row['edad'];
                $descripcion=$row['descripcion'];
                $adoptado=$row['adoptado'];
                $propietario=$row['id_usuario'];

                if($adoptado == 0) {
                    $adopcion = 'SI';
                    $duenho = '';
                } else {
                    $adopcion = 'NO';
                    $buscar = array_search($propietario, $id_usuario);
                    $duenho = $nom_usuario[$buscar];
                }

                echo 
                        "<div class='fila'>
                            <div class='celda' style='text-transform:uppercase;'><p>$tipo</p></div>
                            <div class='celda'><p>$raza</p></div>
                            <div class='celda' style='background:url(images/mascotas/$imagen);background-size:100% 100%;width:250px;height:150px'></div>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$descripcion</p></div>
                            <div class='celda'><p>$adopcion</p></div>
                            <div class='celda'><p>$duenho</p></div>
                        </div>";
            }

        } else {
            echo "<h1>LO SENTIMOS, POR EL MOMENTO NO HAY MASCOTAS<h1>";
        }
        mysqli_close($link);
    }

    function Usuarios() {
        $link=Conectarse();

        // $query = mysqli_query($link,"select max(id) from usuarios");
        // $ultimo = mysqli_fetch_array($query);
        // if($ultimo[0] != NULL) {
        //     $id_usuario = array();
        //     $nom_usuario = array();
        //     $query = mysqli_query($link,"select id, nombre from usuarios;");
        //     while($row=mysqli_fetch_array($query)) {
        //         array_push($id_usuario, $row['id']);
        //         array_push($nom_usuario, $row['nombre']);
        //     }
        // }

        $query = mysqli_query($link,"select * from usuarios order by nombre");
        if($query->num_rows > 0) {
            echo 
            '<div class="encabezado">
                <div class="celda"><p>Nombre</p></div>
                <div class="celda"><p>Telefono</p></div>
                <div class="celda"><p>Ciudad</p></div>
                <div class="celda"><p>Correo</p></div>
                <div class="celda"><p>Edad</p></div>
                <div class="celda"><p>Genero</p></div>
                <div class="celda"><p>Mascotas</p></div>
                <div class="celda"></div>
            </div>';
            while($row=mysqli_fetch_array($query)) {
                $id=$row['id'];
                $nombre=$row['nombre'];
                $telefono=$row['telefono'];
                $ciudad=$row['ciudad'];
                $email=$row['email'];
                $edad=$row['edad'];
                $genero=$row['genero'];
                $adopciones=$row['adopciones'];

                // if($adoptado == 0) {
                //     $adopcion = 'SI';
                //     $duenho = '';
                // } else {
                //     $adopcion = 'NO';
                //     $buscar = array_search($propietario, $id_usuario);
                //     $duenho = $nom_usuario[$buscar];
                // }

                echo 
                        "<div class='fila'>
                            <div class='celda'><p>$nombre</p></div>
                            <div class='celda'><p>$telefono</p></div>
                            <div class='celda'><p>$ciudad</p></div>
                            <div class='celda'><p>$email</p></div>
                            <div class='celda'><p>$edad</p></div>
                            <div class='celda'><p>$genero</p></div>
                            <div class='celda'><p>$adopciones</p><a href='ver.php?a=$id'><p>VER</p></a></div>
                            <div class='celda'><a href='adoptarM.php?a=$adopciones&b=$id'><p>ADOPTAR</p></a></div>
                        </div>";
            }

        } else {
            echo "<h1>NO HAY USUARIOS REGISTRADOS<h1>";
        }
        mysqli_close($link);
    }
?>