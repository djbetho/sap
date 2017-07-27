<?php
 
//Configuracion de la conexion a base de datos
 

include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
  $rut=$_POST['rut'];
  $nombre=$_POST['nombre'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];
  $cargo=$_POST['cargo'];
  $password=$_POST['password'];

 
 //registra los datos del empleados
 
  $sql="INSERT INTO usuarios (rut, password, email, nombre, cargo, direccion) VALUES('$rut', $password, '$email', '$nombre', $cargo,  '$direccion')";
 
mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 
?>