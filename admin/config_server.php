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
        <li class=""><a href="usuarios.php">Usuarios <span class="sr-only">(current)</span></a></li>
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="config_server.php">Servidor</a></li>
             
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
         <form role="form" id="register-form" autocomplete="off"  >
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i> Configuracion del Servidor</h3>
                      
        
                      
         </div>
         
         		<div class="form-body">
                      
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
                   <input name="localhost" type="text" class="form-control" placeholder="Nombre del Servidor ej: localhost ">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="usuario" type="text" class="form-control" placeholder="Usuario Base de Datos">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   <input name="password" type="text" class="form-control" placeholder="Password usuario BD">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-font"></span></div>
                   <input name="nombrebd" type="text" class="form-control" placeholder="Nombre de Base de datos">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
    
               </div>   
  
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Actualizar
                 </button>
            </div>


            </form>
            
           </div>

 </div>
<!-- en body form	 -->

</body>
</html>