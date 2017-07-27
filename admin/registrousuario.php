 
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
         <form role="form" name="nuevo_empleado" id="register-form" autocomplete="off" action="" onsubmit="enviarDatosEmpleado(); return false">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i> Registro</h3>
                      
        
                      
         </div>
         
         		<div class="form-body">
                      
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
                   <input name="rut" type="text" class="form-control" required oninput="checkRut(this)" placeholder="R.U.T.">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" id="name" type="text" required class="form-control" placeholder="Nombre">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <input name="direccion" type="text" required class="form-control" placeholder="Direccion">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text"  id="email"  class="form-control" placeholder="Email">
                   
                  
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
                   <input name="celular" type="text"  id="celular"  class="form-control" placeholder="Celular">
                   
                  
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
               <div class="form-group">
               		<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                   <div class="btn-group" role="group">
					   
					    <select name="cargo" required class="form-control">
					    	 <option value="">Seleccione un Cargo</option>
						    <option value="1">Director</option>
						    <option value="2">Profesor</option>
						    <option value="3">Administrador</option>
						 
						</select>
					  </div>
                   </div> 
					</div>
               </div>   
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password"  type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
               
                            
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
            <script src="media/js/ValidarRut.js"></script>
                 <button type="submit" class="btn btn-info" id="btn-ingresar">
                 <span class="glyphicon glyphicon-log-in"></span> Registrar
                 </button>
            </div>


            </form>
              
           </div>
					<div id="resultado"></div>
 
 </div>
<!-- en body form	 -->

</body>
</html>