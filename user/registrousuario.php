<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Nueva Solicitud de permiso</title>
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
        <li class="active"><a href="usuarios.php">Solicitudes <span class="sr-only">(current)</span></a></li>
         
      <li class=""><a href="../cerrarsesion.php">Cerrar Sesion <span class="sr-only">(current)</span></a></li>
      <li class=""><a href=" "> <?php echo  'Hola '.$_SESSION['nombre']; ?> <span class="sr-only">(current)</span></a></li>
      </ul>
      </div>
</nav>
<!-- body form	 -->
 <div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form role="form" name="nuevo_empleado" id="register-form" autocomplete="off" action="" onsubmit="enviarDatossolicitud(); return false">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i> Formulario de solicitud de Permiso </h3>
      
         </div>
         
         		<div class="form-body">
                      
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
                   <input name="rut" disabled="" value="<?php echo $_SESSION['profesor'] ?>" type="text" class="form-control" required oninput="checkRut(this)" placeholder="R.U.T.">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" id="name" disabled="" value="<?php echo $_SESSION['nombre'] ?>" type="text" required class="form-control" placeholder="Nombre">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                   <div class='input-group date ' id='datetimepicker1'>
                    <input type="date" name="fecha" class="form-control " />
              
                </div>
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon  glyphicon-th-list"></span></div>
                   <input name="motivo" type="text"  id="motivo"  class="form-control" placeholder="Motivo">                
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-check"></span></div>
                   <input name="reemplazo" type="text"  id="email"  class="form-control" placeholder="Reemplazo" alt="Quien lo reemplazara en su puesto de trabajo">                
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>

               </div>   
 
                        
                        
            </div>
            
            <div class="form-footer">
            <script src="media/js/ValidarRut.js"></script>
                 <button type="submit" class="btn btn-info" id="btn-ingresar">
                 <span class="glyphicon glyphicon-log-in"></span> Solicitar Permiso
                 </button>

            </div>

              <blockquote>
                 <footer>Se enviara un correo al Director para que Acepte o Cancele su Solicitud de Permiso Administrativo. Espere su respuesta al correo o revise el estado de su solicitud en la intranet <b>SOLICITUDES</b></p>
                <cite title="Source Title">Se le enviara una copia de la solicitud y la respuesta a su Correo</cite></footer>
              </blockquote>
            </form>
              
           </div>
					<div id="resultado"></div>
 
 </div>
<!-- en body form	 -->
 
</body>
</html>