1. Modificar la linea 3 del archivo conexion.php
   solo es quitar :3307 ya que mi motor de base de datos
   esta en el puerto 3307.

   esta:
   if (!($link=mysqli_connect("localhost:3307","root","")))

   por esta:
   if (!($link=mysqli_connect("localhost","root","")))


2. Al final modifique la base de datos vi que no era necesario
   crear 4 tablas.

3. En el archivo script_datos.txt estan las inserciones,
   al final de cada insercion tiene el nombre de la imagen para
   mostrar a la mascota.
   Si agregamos una mascota nueva este nombre se agrega
   automaticamente ("idMascota_nombreMascota.ext").

4. El proyecto ya lo he terminado si usted gusta puede revisarlo
   en esta pagina

   http://ventadelibrosfcc.ddns.net ó http://159.203.78.46/

   USUARIO 1			USUARIO 2
   matricula: 201544706		matricula: 111111111
   password:  123123		password:  111

5. El examen como el proyecto no son responsive,
   solo los he probado en Chrome