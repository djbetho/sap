<?php 
function cargo($cargo){
 switch ($cargo) {
 	case '1':
            return 'Director';               
                              
 		break;
 	case '2':
			 return 'Profesor';   
 		break;
	case '3':
			 return 'Administrador';   
		break;
 	default:
 		# code...
 		break;
 }

}

 ?>