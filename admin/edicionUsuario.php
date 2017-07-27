<?php 
error_reporting(0);
$rut = $_GET['a'];

include('conex.php');
$sql = "select * from usuarios where rut = '$rut'";
$registro = mysql_query($sql,$dbx);

 while($row = mysql_fetch_array($registro)){  
$id = $row['id'];
$nombre = $row['nombre'];
$direccion = $row['direccion'];
$email = $row['email'];
$cargo = $row['cargo'];
$celular = $row['celular'];
$password = $row['password'];

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Nuevo usuarios</title>
    <!--CSS-->    
    <link rel="stylesheet" href="media/css/bootstrap.css">
    <link rel="stylesheet" href="media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="media/font-awesome/css/font-awesome.css">
    <!--Javascript-->    
    <script src="media/js/jquery-1.10.2.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <script src="media/js/dataTables.bootstrap.min.js"></script>          
    <script src="media/js/bootstrap.js"></script>
    <script src="media/js/lenguajeusuario.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
     <script src="media/js/ajax.js"></script> 




     
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="usuarios.php">Usuarios <span class="sr-only">(current)</span></a></li>
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="config_server.php">Servidor</a></li>
             
          </ul>
        </li>
         <li class=""><a href="../cerrarsesion.php">Cerrar Sesion <span class="sr-only">(current)</span></a></li>
      </ul>
      </div>
</nav>
<!-- body form	 -->
 <div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form role="form" name="editar_empleado" id="register-form" autocomplete="off" action="" onsubmit="enviarDatosEditadosEmpleado(); return false">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i> Editar Registro</h3>
                      
        
                      
         </div>
         
         		<div class="form-body">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
                   <input name="rut" type="text"  disabled="" value="<?php echo $rut; ?>" class="form-control" placeholder="R.U.T.">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nombre">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <input name="direccion" type="text" value="<?php echo $direccion; ?>" class="form-control" placeholder="Direccion">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text" value="<?php echo $email; ?>" class="form-control" placeholder="Email">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
                   <input name="celular" type="text"  id="celular" value="<?php echo $celular; ?>"  class="form-control" placeholder="Celular">
                   
                  
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
               <div class="form-group">
               		<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <div class="btn-group" role="group">
					   
					    <select name="cargo"  class="form-control">
                    <option value="">Seleccione un Cargo</option>
                    <option value="1" <?php if($cargo == 1 ) echo "selected"; ?> >Director</option>
                    <option value="2" <?php if($cargo == 2 ) echo "selected"; ?> >Profesor</option>
                    <option value="3" <?php if($cargo == 3 ) echo "selected"; ?> >Administrador</option>
						  
						</select>
					  </div>
                   </div> 
					</div>
               </div>   
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" value="<?php echo $password; ?>" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
               
                            
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info" id="btn-ingresar">
                 <span class="glyphicon glyphicon-log-in"></span> Editar Registro
                 </button>
            </div>


            </form>
            
           </div>
					<div id="resultado"></div>
 
 </div>
<!-- en body form	 -->

</body>
</html>