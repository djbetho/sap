
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de solicitudes</title>
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
     <script src="media/js/ajax.js"></script>
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
        <li class="active"><a href="usuarios.php">Solicitudes <span class="sr-only">(current)</span></a></li>
         
        
         <li class=""><a href="../cerrarsesion.php">Cerrar Sesion <span class="sr-only">(current)</span></a></li>
          <li class=""><a href=" "> <?php echo  'Hola '.$_SESSION['nombre']; ?> <span class="sr-only">(current)</span></a></li>
      </ul>
      </div>
</nav>
<div class=".col-xs-6 .col-sm-3">
    <h1>Usuarios
       <!--  <a href="registrousuario.php" class="btn btn-primary pull-right menu   "><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nueva Solicitud</a> -->
    </h1>  
</div>
<div class=".col-md-4 .col-md-4 .col-md-4">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>RUT</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Fecha</th> 
            <th>Reemplazo</th> 
            <th>Fecha Ingreso</th>             
            <th>Estado</th>
            <th>Acciones</th>

        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th>RUT</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Fecha</th> 
            <th>Reemplazo</th> 
            <th>Fecha Ingreso</th>             
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </tfoot>
    </table>        
</div>
</body>
</html>
