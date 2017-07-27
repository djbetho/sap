<?php
 
//Configuracion de la conexion a base de datos
 

include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
  $rut=$_POST['rut'];
  $nombre=$_POST['nombre'];
  $fecha=$_POST['fecha'];
  $motivo=$_POST['motivo'];
  $reemplazo=$_POST['reemplazo'];
  

 
 //registra los datos del empleados
 
  $sql="INSERT INTO solicitud_historial (rut, detalle, fecha, reemplazo, fecha_registro, estado)";
  $sql.="VALUES ( '$rut', '$motivo', '$fecha', '$reemplazo', now(), 0 )";

mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 //Enviar Correo al Director
 
//ENVIO DE CORREO DE CANCELACION
$sql_director = "SELECT rut, email, nombre FROM  usuarios WHERE cargo = 1";
$registro_dire = mysql_query($sql_director,$dbx);
while($row_di = mysql_fetch_array($registro_dire)){	
	$nombre_director = $row_di['nombre']; 
	$correo_dire = $row_di['email'];
}

$sql_insert ="SELECT MAX(id_solicitud) AS id FROM solicitud_historial";
 $registro = mysql_query($sql_insert,$dbx);
 if ($rows = mysql_fetch_row($registro)) {
$id = trim($rows[0]);
}

$destinatario = ''.$correo_dire.''; 
$asunto = "SISTEMA INTRANET - SOLICITUD DE PERMISO"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Solicitud de Permiso</title> 
</head> 
<body> 
<h1><b>'.$nombre_director.'</b></h1> 
<p> 
<b>El funcionario '.$nombre.' </b>. 
<p>a solicitado permiso administrativo  </p>
<p>para el dia <b>'.$fecha.'</b> , con goce de sueldo.</p> 
<p>Por el motivo : <b>'.$motivo.'</b>, en su ausencia quedara : <b>'.$reemplazo.'</b>.</p>
 
  <p>Entre a la intranet para Aceptar o Anular la Solicitud www.intranet.sanfranciscoasis.cl </p>
<p>
 </p>
 <p><b>Favor no responder este correo</b></p>
 </body>
 <footer><img src="http://www.sanfranciscoasis.cl/wp-content/uploads/2017/05/logo-.png" width="30" height="35" border="0">Sistema Intranet - Colegio San Francisco de Asis - Salamanca</footer>
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: INTRANET<noreply@sanfranciscoasis.cl>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: noreply@sanfranciscoasis.cl\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: noreply@sanfranciscoasis.cl\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: ".$correo_dire ."  \r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: ru.bugueno@gmail.com,ru.bugueno@gmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);
 ?>
     
<a href=""></a>
    </body>
    </html>