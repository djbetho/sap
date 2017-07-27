<?php 
 
$destinatario = 'ru.bugueno@gmail.com'; 
$asunto = "SISTEMA INTRANET - SOLICITUD DE PERMISO"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Solicitud Aceptada</title> 
</head> 
<body> 
<h1>.$nombre_full./h1> 
<p> 
<b>El Director $nombre_director.</b>. 
<p>a Aceptado la solicitud de permiso administrativo  </p>
<p>para el dia .$fecha. , con goce de sueldo.</p> 
<p>Por el motivo : .$detalle., en su ausencia quedara : .$reemplazo..</p>
 
<p>
 </p>
 <p><b>Favor no responder este correo</b></p>
 </body>
 <footer><img src="http://www.sanfranciscoasis.cl/intranet/images/cosfcolor-55x55.png" width="30" height="35" border="0">Sistema Intranet - Colegio San Francisco de Asis - Salamanca</footer>
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0"; 
$headers .= "Content-type: text/html; charset=iso-8859-1"; 

//dirección del remitente 
$headers .= "From: INTRANET<noreply@sanfranciscoasis.cl>"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: noreply@sanfranciscoasis.cl"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: noreply@sanfranciscoasis.cl"; 

//direcciones que recibián copia 
$headers .= "Cc: ru.bugueno@gmail.com"  ; 

 
mail($destinatario,$asunto,$cuerpo,$headers);
 ?>
     

    </body>
    </html>

