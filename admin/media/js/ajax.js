// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 function eliminar_usuario(id){
  ru=$(".rut").val();
 var dataString = 'id='+id;
  var r = confirm("Desea eliminar el registro");
if (r == true) {
   
  $.ajax({
            type: "POST",
            url: "eliminar_registro.php",
            data: dataString,
            success: function(data) {            
                alert('Se ha eliminado correctamente');
                 
                setTimeout(function(){// wait for 5 secs(2)
                     location.reload(); // then reload the page.(3)
                    }, 500); 
                  
               
            }
        });
} else {

     //alert('cancelar');
}

 }
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosEmpleado(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  ru=document.nuevo_empleado.rut.value;
  nam=document.nuevo_empleado.name.value;
  dir=document.nuevo_empleado.direccion.value;
  em=document.nuevo_empleado.email.value;
  car=document.nuevo_empleado.cargo.value;
  pass=document.nuevo_empleado.password.value;
   celular=document.nuevo_empleado.celular.value;
    if (ru == '' )
    alert("Debe Ingresar el RUT");
    if (nam == '' )
    alert("Debe Ingresar el Nombre");
    if (dir == '' )
    alert("Debe Ingresar el Direccion");
    if (em == '' )
    alert("Debe Ingresar el E-Mail");
    if (car == '' )
    alert("Debe Ingresar el Cargo");
    if (pass == '' )
    alert("Debe Ingresar el Password");


        else if (ru&&nam&&dir&&em&&car&&pass)
        {
    $.ajax({
            type: "POST",
            url: "guardar_re.php",
            data:
                 {'rut':ru,
                 'nombre':nam,
                 'direccion':dir,
                 'email':em,
                 'cargo':car,
                 'password':pass,
                  'celular':celular},
            success: function(data) {            
                
               
                  alert("Se Creo Satifactoriamente el Usuario :"+nam);
                  window.location.href="usuarios.php"; 
                  LimpiarCampos();
                                
            }
        });
  }





 }
//funcion para editar
 
function enviarDatosEditadosEmpleado(){
 
 
  //recogemos los valores de los inputs
  id=document.editar_empleado.id.value;
  nam=document.editar_empleado.name.value;
  dir=document.editar_empleado.direccion.value;
  em=document.editar_empleado.email.value;
  car=document.editar_empleado.cargo.value;
  pass=document.editar_empleado.password.value;
 celular=document.editar_empleado.celular.value;
    $.ajax({
            type: "POST",
            url: "guardar_Editado_re.php",
            data:
                 { 
                 'nombre':nam,
                 'direccion':dir,
                 'email':em,
                 'cargo':car,
                 'password':pass,
                  'id':id,
                  'celular':celular},
            success: function(data) {            
                
               
                  alert("Se Creo Satifactoriamente el Usuario :"+nam);
                   window.location.href="usuarios.php"; 
                  LimpiarCampos();
                                
            }
        });
 





 }

//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_empleado.rut.value="";
  document.nuevo_empleado.name.value="";
  document.nuevo_empleado.direccion.value="";
  document.nuevo_empleado.email.value="";

  document.nuevo_empleado.password.value="";
 
}