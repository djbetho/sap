<?php
	session_start();

include ("../admin/conex.php");
	include ("cargo.php");
	include ("estados.php");

	$consulta="CALL seleccion_solicitudes_historial('".$_SESSION['profesor']."');";


	$registro = mysql_query($consulta,$dbx);
	
	$tabla = "";
	
	while($row = mysql_fetch_array($registro)){		
			$fecha = date_create($row['fecha']);
			$fecha_registro = date_create($row['fecha_registro']);


		$editar = '<a href=\"edicionUsuario.php?a='.$row['rut'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<input class=rut type=hidden value='.$row['detalle'].'> <a href=\"javascript:void(0);\" onclick=\"eliminar_solicitud('.$row['id_solicitud'].')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
			
		$tabla.='{
				  "id_solicitud":"'.$row['id_solicitud'].'",
				  "rut":"'.$row['rut'].'",
				  "nombre":"'.$row['nombre'].'",
				  "detalle":"'.html_entity_decode($row['detalle'], ENT_QUOTES | ENT_HTML401, "UTF-8").'",
				  "fecha":"'.date_format($fecha, 'd-m-Y').'",
				  "reemplazo":"'.$row['reemplazo'].'",
				  "fecha_registro":"'.date_format($fecha_registro, 'd/m/Y H:i:s').'",
				  "estado":"'.estado($row['estado']).'",
				  "acciones":"'.$eliminar.'"
				},';		
	}	
 /* 
 */
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>