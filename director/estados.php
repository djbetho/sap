<?php 
function estado($estado){
 switch ($estado) {
 	case '0':
 		 
            return' PENDIENTE';               
                              
 		break;
 	case '1':
			 return' ANULADO';       
 		break;
	case '2':
			 return' ACEPTADO';       	
		break;
 	default:
 		# code...
 		break;
 }

}
