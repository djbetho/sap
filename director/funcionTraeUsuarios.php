<?php
	session_start();

	include ("../admin/conex.php");
	include ("cargo.php");
	include ("estados.php");

	$consulta="CALL seleccion_solicitudes();";


	$registro = mysql_query($consulta,$dbx);
	
	$tabla = "";
	
	while($row = mysql_fetch_array($registro)){		
		$fecha_registro = date_create($row['fecha_registro']);
		 $fecha_sol = date_create($row['fecha']);
		if($row['estado'] == 2 || $row['estado'] == 1){
$editar='';
$eliminar='';
		}
		else{
			$editar = '<a href=\"javascript:void(0) ;\" onclick=\"aceptar_solicitud('.$row['id_solicitud'].')\"    data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cancelar\" class=\"btn btn-primary\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i></a>';
			$eliminar = '<input class=rut type=hidden value='.$row['detalle'].'> <a href=\"javascript:void(0);\" onclick=\"cancelar_solicitud('.$row['id_solicitud'].')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Cancelar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		}
		
			
		$tabla.='{
				  "rut":"'.$row['rut'].'",
				  "nombre":"'.$row['nombre'].'",
				  "detalle":"'.html_entity_decode($row['detalle'], ENT_QUOTES | ENT_HTML401, "UTF-8").'",
				  "fecha":"'.date_format($fecha_sol, 'd/m/Y').'",
				  "reemplazo":"'.$row['reemplazo'].'",
				  "fecha_registro":"'.date_format($fecha_registro, 'd/m/Y H:i:s').'",
				  "estado":"'.estado($row['estado']).'",
				  "acciones":"'.$editar.$eliminar.'"
				},';		
	}	
 /*fa fa-check-square-ofa fa-check-square-ofa fa-check-square-ofa fa-check-square-o
			{ "data": "rut" },
			{ "data": "nombre" },
			{ "data": "detalle" },
			{ "data": "fecha" },
			{ "data": "reemplazo" },
			{ "data": "fecha_registro" },
			{ "data": "estado" },
			{ "data": "acciones"}
 */
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>