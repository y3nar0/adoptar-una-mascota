<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style-index.css">
</head>
<body>
    <div class="header">
        <h1 class="title">¿Listo para adoptar una mascota?</h1>
        <nav>
            <ul class="menu">
                <li><a href="#">Catalogo de mascotas</a>
                    <ul>
                        <li><a href="listarM.php?l=1">Ver todos</a></li>
                        <li><a href="listarM.php?l=2">Solo perros</a></li>
                        <li><a href="listarM.php?l=3">Solo gatos</a></li>
                        <li><a href="listarM.php?l=4">Solo conejos</a></li>
                        <li><a href="listarM.php?l=5">Ver otros</a></li>
                    </ul>
                </li>
                <li><a href="listarU.php">Catalogo de usuarios</a></li>
                <li><a href="#modal-add-mascota">Agregar una mascota</a></li>
                <li><a href="#modal-add-usuario">Agregar un usuario</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="body">
        <article>
            <p>
                Adoptar una mascota enriquece la vida y abre las puertas a una época de
                diversión, descubrimientos, juegos y mucho mas.
            </p>
            <br>
            <p>
                Sin embargo, implica  también asumir la responsabilidad de cuidar de el
                durante muchos años, proporcionándole comida, un lugar seguro donde vivir,
                cuidados veterinarios y tambien de satisfacer sus necesidades en cuanto a
                actividad y cariño.
            </p>
        </article>

        <div id="modal-add-mascota" class="modal">
            <aside class="modal-box">
                <!-- <h2>¿Quieres dar de baja tu cuenta?</h2> -->
                <form action="guardar.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <label><p>TIPO DE MASCOTA</p></label>
                    <select name="mod-tipo-m">
                        <option value="perro">PERRO</option>
                        <option value="gato">GATO</option>
                        <option value="conejo">CONEJO</option>
                        <option value="otro">OTRO</option>
                    </select>
                    <br>
                    <label><p>NOMBRE</p><input type="text" name="mod-nombre-m" size="30%" autocomplete="off" required></label>
                    <!-- <label><p>Escriba una pequeña descripcion del libro</p></label> -->
                    <br>
                    <label><p>EDAD</p><input type="number" name="mod-edad-m" autocomplete="off" required pattern="[0-9]"></label>
                    <br>
                    <label><p>RAZA ó ESPECIE</p><input type="text" name="mod-raza-m" autocomplete="off" required></label>
                    <br>
                    <textarea name="mod-descripcion-m" cols="40" rows="5" placeholder="Escriba una pequeña descripcion..." required style="color:#00548C"></textarea>
                    <br>
                    <label><p>FOTO DE LA MASCOTA</p></label>
                    <input type="file" name="mod-imagen-m" required>
                    <div>
                        <input type="submit" name="agregarM" value=" Agregar ">
                    </div>
                </form>
                <div>
                    <a class="cerrar-modal" href="#">Cerrar</a>
                </div>
            </aside>
        </div>

        <div id="modal-add-usuario" class="modal">
            <aside class="modal-box">
                <!-- <h2>¿Quieres dar de baja tu cuenta?</h2> -->
                <form action="guardar.php" method="POST" enctype="multipart/form-data">
                    <br><br>
                    <label><p>Nombre</p><input type="text" name="mod-nombre-u" size="30%" autocomplete="off" required></label>
                    <!-- <label><p>Escriba una pequeña descripcion del libro</p></label> -->
                    <br>
                    <label><p>Telefono</p><input type="number" name="mod-telefono-u" autocomplete="off" required pattern="[0-9]"></label>
                    <br>
                    <label><p>Ciudad</p></label>
                    <select name="mod-ciudad-u">
                        <option value="acajete">Acajete</option>
                        <option value="acatlan">Acatlán</option>
                        <option value="acatzingo">Acatzingo</option>
                        <option value="ajalpan">Ajalpan</option>
                        <option value="amozoc">Amozoc</option>
                        <option value="atlixco">Atlixco</option>
                        <option value="chalchicomula">Chalchicomula</option>
                        <option value="chietla">Chietla</option>
                        <option value="chignahuapan">Chignahuapan</option>
                        <option value="chignautla">Chignautla</option>
                        <option value="coronango">Coronango</option>
                        <option value="cuautlancingo">Cuautlancingo</option>
                        <option value="cuetzalan">Cuetzalan del Progreso</option>
                        <option value="huauchinango">Huauchinango</option>
                        <option value="huejotzingo">Huejotzingo</option>
                        <option value="hueytamalco">Hueytamalco</option>
                        <option value="izucar">Izúcar de Matamoros</option>
                        <option value="libres">Libres</option>
                        <option value="nopalucan">Nopalucan</option>
                        <option value="PDBravo">Palmar de Bravo</option>
                        <option value="puebla">Puebla de Zaragoza</option>
                        <option value="quecholac">Quecholac</option>
                        <option value="SACholula">San Andrés Cholula</option>
                        <option value="SMT">San Martín Texmelucan</option>
                        <option value="APCholula">San Pedro Cholula</option>
                        <option value="SSESeco">San Salvador el Seco</option>
                        <option value="SSEV">San Salvador el Verde</option>
                        <option value="tecamachalco">Tecamachalco</option>
                        <option value="tehuacan">Tehuacán</option>
                        <option value="tepeaca">Tepeaca</option>
                        <option value="teziutlan">Teziutlán</option>
                        <option value="tlachichuca">Tlachichuca</option>
                        <option value="tlacotepec">Tlacotepec de Benito</option>
                        <option value="tlahuapan">Tlahuapan</option>
                        <option value="tlatlauquitepec">Tlatlauquitepec</option>
                        <option value="venustiano">Venustiano Carranza</option>
                        <option value="xicotepex">Xicotepex</option>
                        <option value="xiutetelco">Xiutetelco</option>
                        <option value="zacapoaxtla">Zacapoaxtla</option>
                        <option value="zacatlan">Zacatlán</option>
                    </select>
                    <br>
                    <label><p>Correo</p><input type="text" name="mod-email-u" autocomplete="off" required></label>
                    <br>
                    <label><p>Edad</p><input type="number" name="mod-edad-u" autocomplete="off" required pattern="[0-9.]"></label>
                    <br>
                    <label><p>Género</p>
                    <label><input type="radio" name="mod-gen-u" value="masculino" checked>Masculino</label>
                    <label><input type="radio" name="mod-gen-u" value="femenino">Femenino</label>
                    <br>
                    <div>
                        <input type="submit" name="agregarU" value=" Agregar ">
                    </div>
                </form>
                <div>
                    <a class="cerrar-modal" href="#">Cerrar</a>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>