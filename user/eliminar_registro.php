<?php 
 
include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
  $id=$_POST['id'];
  
 
 //registra los datos del empleados
 
   $sql="DELETE FROM  usuarios WHERE id ='$id' ";
 	mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 

 ?>