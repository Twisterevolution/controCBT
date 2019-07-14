<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<form action="#" id="form_configuracion" class="form-horizontal">

     <label class="control-label col-md-6">Usuario</label>
      <div class="col-md-6">
      <input id="nombre_usuario"   class="form-control" type="text">
     
    <label class="control-label col-md-6">Rol</label>
     <div class="col-md-6">
     <input id="rol_usuario" class="form-control" type="text">
     
    <label class="control-label col-md-6">Contraseña</label>
     <div class="col-md-6">
     <input id="contra_usuario"  class="form-control" type="text" >
     <input id="t1" type="text" name="" value="la unidad sale 6-13">
     <textarea id=""></textarea>
     <button onclick="pegar()"></button>
     <div id="aqui">
         
     </div>
    
</form>

</body>


<script src="js/jquery.min.js"></script>

<script>

$(document).ready(function () {
    $('#mensaje_error').hide();  
});
function pegar(){
var primeraparte = $("#t1").attr('value');

var variable1 ="B3";
var variable2 ="cuartes 2 cia";
var variable3 ="Carga de cilindros";
var variable4 ="399";
var variable5 ="Sebastian Gomez";
var variable6 ="4";
var variable7 = "Telecomunicaciones";


$("#aqui").html("*Nuevo 6-13* </br> Unidad: *"+variable1+"*    Donde: *"+variable2+"* </br> Motivo: *"+variable3+"*</br> Conductor:*"+variable4+"*</br> OBAC: *"+variable5+"*      Total Bomberos: *"+variable6+"*</br>Autorizado Por: *"+variable7+"*");
};




var cambioDePass = function() {
    var cont = $('#contra_usuario').val();
    var cont2 = $('#contra_n_usuario').val();
    if (cont2 > cont) {
        $('#mensaje_error').hide();
        $('#mensaje_error').attr("class", "control-label col-md-12 text-success");
        $('#mensaje_error').show();
        $('#mensaje_error').html("Las constraseñas si coinciden");
    } else {
         $('#mensaje_error').html("Las constraseñas no coinciden");
        $('#mensaje_error').show();
    }
}

$("#contra_usuario").on('keyup', cambioDePass);
$("#contra_n_usuario").on('keyup', cambioDePass);



</script>

</html>