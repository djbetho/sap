<?php 
// Desactivar toda notificación de error


//Recibimos las dos variables
$usuario=$_POST["usuario"];
$password=$_POST["password"];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */
include 'admin/conex.php';

$admin = ("  SELECT id, rut, password, email, nombre, cargo, celular, direccion
FROM usuarios
WHERE rut = '".$usuario."' AND password = ".$password."; ");
  
    $registro = mysql_query($admin,$dbx);
    
    while($row = mysql_fetch_array($registro)){     
        $cargo = $row['cargo'];
        $nombre = $row['nombre'];
    }
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
  
 
/* Ahora comprobamos que variable contiene al usuario*/
if($cargo== 3) 
{
    /* Si entra en este if significa que el que intenta acceder es un alumno, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['admin']="$usuario";
    $_SESSION['nombre']="$nombre";
    /* Nos dirigimos al espacio de los alumnos usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: admin/usuarios.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un profesor */
 else if($cargo == 2) 
{
    session_start();

    $_SESSION['profesor']="$usuario";
 $_SESSION['nombre']="$nombre";

    header("Location: user/usuarios.php");


    exit(); 
}
 
//comprobamos si es un director el que intenta abrir la sesión
 else if($cargo == 1) 
{
    session_start();
    $_SESSION['director']="$usuario";
     $_SESSION['nombre']="$nombre";
    header("Location: director/usuarios.php");
    exit();
} 
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
}

 ?>