<?php
	
	include ("conex.php");
	include ("cargo.php");
	$consulta = "SELECT * FROM trabajador";
	$registro = mysql_query($consulta,$dbx);
	
	$tabla = "";
	
	while($row = mysql_fetch_array($registro)){		

		$editar = '<a href=\"edicionUsuario.php?a='.$row['rut'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<input class=rut type=hidden value='.$row['nombre'].'> <a href=\"javascript:void(0);\" onclick=\"eliminar_usuario('.$row['id'].')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		$d_cuenta='<a href=\"Detalle_Usuario.php?a='.$row['rut'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detalle\" class=\"btn btn-primary\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></a>';

		$d_documentos='<a href=\"DocUsuario.php?a='.$row['rut'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Documentos\" class=\"btn btn-primary\"><i class=\"fa fa-book fa-fw\" aria-hidden=\"true\"></i></a>';
		$estados ='';
			
		$tabla.='{
				  "rut":"'.$row['rut'].'",
				  "nombre":"'.html_entity_decode($row['nombre'], ENT_QUOTES | ENT_HTML401, "UTF-8").'",
				  "f_nac":"'.$row['f_nac'].'",
				  "e_civil":"'.$row['e_civil'].'",
				  "genero":"'.$row['genero'].'",
				  "nac":"'.$row['nac'].'",
				  "direccion":"'.$row['direccion'].'",
				  "ciudad":"'.$row['ciudad'].'",
				  "cargo":"'.$row['cargo'].'",
				  "acciones":"'.$editar.$eliminar.$d_cuenta.$d_documentos.$estados.'"
				},';		
	}	
 
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>