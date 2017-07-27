<?php 
// Desactivar toda notificación de error
error_reporting(0);

 
 session_start();
if($_SESSION['admin']){
 header("Location: admin/usuarios.php");
}
else if($_SESSION['profesor']){
   header("Location: user/usuarios.php");
}
else if($_SESSION['director']){
   header("Location: user/usuarios.php");
} 
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Intranet Colegio San francisco de Asis</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">


</head>
<!-- NAVBAR
================================================== -->

<body>

<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="manejadorsesiones.php" role="form">
        <fieldset>
          <h2>Iniciar Sesión</h2>
          <hr class="colorgraph">
          <div class="form-group">
            <input name="usuario" type="text" id="usuario"   oninput="checkRut(this)" class="form-control input-lg" placeholder="123456-7">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="12345">
          </div>
          <span class="button-checkbox">
         
          
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Iniciar" class="btn btn-lg btn-success btn-block">
            </div>
             
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>



<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
	if($_REQUEST['user_id']=="" || $_REQUEST['password']=="")
	{
	echo " Field must be filled";
	}
	else
	{
	   $sql1= "select * from student where email= '".$_REQUEST['user_id']."' &&  password ='".$_REQUEST['password']."'";
	  $result=mysql_query($sql1)
	    or exit("Sql Error".mysql_error());
	    $num_rows=mysql_num_rows($result);
	   if($num_rows>0)
	   {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
		   //header("location:filename.php"); 
 //OR just simply print a message.
         Echo "You have logged in successfully";	
        }
	    else
		{
			echo "username or password incorrect";
		}
	}
}	
?>

<script src="admin/media/js/ValidarRut.js"></script>
</body>
</html>
