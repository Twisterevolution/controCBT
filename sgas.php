<?php 

  include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';

    $sgasactualizar = $_POST['sgasid'];
    $sgasservicio = $_POST['sgasservicio'];


?>

            <div class="row">
           
            <div class="form-group col-md-6" align="center">
            <input type="radio" name="op" value="1" required >Operadora Nº1<br>
            <input type="radio" name="op" value="2">Operadora Nº2<br>
            <input type="radio" name="op" value="3">Operadora Nº3<br>
            <input type="radio" name="op" value="4">Operadora Nº4<br>
          </div>
          <div class="form-group col-md-6" align="center">
            <input type="radio" name="op" value="5">Operadora Nº5<br>
            <input type="radio" name="op" value="6">Operadora Nº6<br>
            <input type="radio" name="op" value="7">Operadora Nº7<br>
            <input type="radio" name="op" value="8">Operadora Nº8<br>
          </div>
        </div>
          <div class="row">
            <input type="hidden" name="sgasok" id="sgasok" value="1">
            <input type="hidden" name="carroactualizar" id="carroactualizar" value="<?php echo "$sgasactualizar"; ?>">
            <input type="hidden" name="servicioact" id="servicioact" value="<?php echo "$sgasservicio"; ?>">

          </div>



<script>

    $("#sgas").on('submit', function(e){
              e.preventDefault();
    var sgasStat = $("#sgas").serializeArray();
    $.ajax({
        url: "sgas-actualiza-dato.php",
        method:"POST",
        dataType: 'json',
        data: sgasStat

        });
    var servicio = $("#servicioact").val();

    setTimeout(function() {
        $("#verTodo").load('cargadetalleservicio.php',{
            x:servicio
        });

        $("#ingresosgas").modal('hide');

        },500);

        

        });

   

    

    


</script>

              
 


