<?php
 
//Configuracion de la conexion a base de datos
 

include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
   $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];
  $cargo=$_POST['cargo'];
  $password=$_POST['password'];

 
 //registra los datos del empleados
 
 
 	$sql ="UPDATE usuarios
	SET password = $password
	, email = '$email'
	, nombre = '$nombre'
	, cargo = $cargo
	, celular = NULL
	, direccion = '$password'
	WHERE id = $id";

	 
	mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 
?>