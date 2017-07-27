 <?php 
 

include ("../admin/conex.php");
include ("cargo.php");
 

//variables POST
  $id=$_POST['id'];
 // $motivo_P = $_POST['motivo'];
  
 
 //registra los datos del empleados
 
   $sql=" UPDATE solicitud_historial SET estado = 2 WHERE id_solicitud  ='$id' ";
 	mysql_query($sql,$dbx) or die('Error. '.mysql_error()); 
 
 
    error_reporting(E_STRICT);

    date_default_timezone_set('America/santiago');

//ENVIO DE CORREO DE CANCELACION
$sql_director = "SELECT rut, email, nombre FROM  usuarios WHERE cargo = 1";
$registro_dire = mysql_query($sql_director,$dbx);
while($row_di = mysql_fetch_array($registro_dire)){	
	$nombre_director = $row_di['nombre']; 
	$correo_dire = $row_di['email'];
}


$sql_detalle = "SELECT a.rut,a.email, a.nombre, b.id_solicitud , b.detalle,b.reemplazo,b.fecha 
				FROM usuarios a,solicitud_historial b WHERE a.rut = b.rut AND b.id_solicitud = '$id'";

$registro = mysql_query($sql_detalle,$dbx);

while($row = mysql_fetch_array($registro)){	
	$email_destino = $row['email'];
	$rut_permiso = $row['rut'];	
	$nombre_full = $row['nombre'];
	$fecha=$row['fecha'];
	$detalle = $row['detalle'];
	$reemplazo = $row['reemplazo'];
}
 
$destinatario = ''.$email_destino.''; 
$asunto = "SISTEMA INTRANET - SOLICITUD DE PERMISO"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Solicitud Aceptada</title> 
</head> 
<body> 
<h1><b>'.$nombre_full.'</b></h1> 
<p> 
<b>El Director '.$nombre_director.' </b>. 
<p>a Aceptado la solicitud de permiso administrativo  </p>
<p>para el dia <b>'.$fecha.'</b> , con goce de sueldo.</p> 
<p>Por el motivo : <b>'.$detalle.'</b>, en su ausencia quedara : <b>'.$reemplazo.'</b>.</p>
 
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
     

    </body>
    </html>

 