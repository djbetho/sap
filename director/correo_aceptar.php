
    <?php


    error_reporting(E_STRICT);

    date_default_timezone_set('America/santiago');

  //  require_once('../class.phpmailer.php');
    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already <?php 
$destinatario = "ru.bugueno@gmail.com"; 
$asunto = "SISTEMA INTRANET - SOLICITUD DE PERMISO"; 
$cuerpo = ' 
<html> 
<head> 
   <title>  </title> 
</head> 
<body> 
<h1>$MARIO CHAVES</h1> 
<p> 
<b>El funcionario $nombre_full - R.U.T. $rut</b>. 
<p>Esta solicitando permiso administrativo </p>
<p>para el dia $fecha , con goce de sueldo.</p> 
<p>Por el motivo : $detalle, en su ausencia quedara : $reemplazo.</p>

	<p>
	  Si desea aceptar esta solicitud favor hacer click aqui <a href="#"><img src="http://sanfranciscoasis.cl/intranet/images/aceptar-cheque-verde-ok-si-icono-6092-16.png" width="18" height="20" border="0"></a>  .</p>
	 <p> Si desea Cancelar esta solicitud favor  <a href="#"><img src="http://sanfranciscoasis.cl/intranet/images/eliminar-cancelar-icono-4935-16.png" width="18" height="20" border="0"></a></p>
	</p> 
<p>
	
</p>
 <p><b>Favor no responder este correo</b></p>
 </body>
 <footer><img src="http://www.sanfranciscoasis.cl/intranet/images/cosfcolor-55x55.png" width="30" height="35" border="0">Sistema Intranet - Colegio San Francisco de Asis - Salamanca</footer>
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
$headers .= "Cc: ru.bugueno@gmail.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: ru.bugueno@gmail.com,ru.bugueno@gmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);
 ?>
     

    </body>
    </html>