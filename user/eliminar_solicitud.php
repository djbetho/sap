<?php 
 
include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
  $id=$_POST['id'];
  
 
 //registra los datos del empleados
 
   $sql="DELETE FROM solicitud_historial WHERE id_solicitud = '$id' ";
 	mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 

 ?>