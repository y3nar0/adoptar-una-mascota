<?php 
   function Conectarse() { 
      if (!($link=mysqli_connect("localhost:3307","root",""))) 
      { 
         echo "Error conectando a la base de datos."; 
         exit(); 
      } 
      if (!(mysqli_select_db($link,"adoptar_mascota")))
      { 
         echo "Error seleccionando la base de datos."; 
         exit(); 
      } 
      return $link; 
   } 
?>