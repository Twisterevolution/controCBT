<?php 
  //echo '<pre>';
  //var_dump($_GET);
  //echo '</pre>';
  include_once 'funciones/sesiones.php';
  include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';

// datos que se cargan en el modal donde estan todos los datos de UN servicio.
    $sql4 = "SELECT * FROM unidades_servicios WHERE id_servicio_aso = ".$_POST['x']."";
    $resultado4 = $conn->query($sql4);
    
  //echo '<pre>';
  //var_dump($_POST);
  //echo '</pre>';

    echo '<div class="modal-dialog" id="tamano">';
      echo '<div class="modal-content">';



        echo '<!-- Modal Header -->';
        echo '<div class="modal-header text-center">';
          echo '<h2 class="modal-title" style="font-weight: bolder;">Resumen General del 6-13</h2>';
              $sqlfolio = "SELECT * FROM servicios WHERE id_servicios = ".$_POST['x']." ";
              $resfolio = $conn->query($sqlfolio);
              $si = $resfolio->fetch_assoc();

          echo '<h3  class="folio" style= "color: red; font-weight: bold; font-size: 24px;">';
          echo 'FOLIO Nº'.$si['id_servicios'];    
          echo '</h3>';
          echo '<input type="hidden" id="sgasx" name="" value="'.$si['id_servicios'].'">';
           echo "<h4>Fecha:<b>".$si['fservicio'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hora de Inicio:<b>'.$si['horasalida'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDonde:<b>'.$si['direccion'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAutorizado por:<b>'.$si['autoriza'].'</b></h4>';
           echo ' </div>';
          echo'<input id="direccionserv" type="hidden" name="" value="'.$si['direccion'].'">';
          echo'<input id="motivoserv" type="hidden" name="" value="'.$si['motivo'].'">';
       

       echo '<!-- Modal body -->';
                 echo '<div class="modal-body">';
      echo '<div class="col-md-12">';
        echo '<div class="table-responsive">';
          echo '<table class="table table-hover" id="todos">';
            echo '<caption>Detalle de unidades en el servicio</caption>';
            echo '<thead>';
              echo '<tr>';
                echo '<th>Unidad</th>';
                echo '<th>Conductor</th>';
                echo '<th>OBAC</th>';
                echo '<th>NºBomberos</th>';
                echo '<th>Hora salida</th>';
                echo '<th>Hora Llegada</th>';
                echo '<th>Km Salida</th>';
                echo '<th>Km Llegada</th>';
                echo '<th>SGAS</th>';
                
                
                echo '<th>Completar</th>';

              echo '</tr>';
            echo '</thead>';
            echo '<tbody class="datosTabla">';
if($resultado4->num_rows > 0){
  while ($datos= $resultado4->fetch_array()) {  
           echo'<tr class="desactxx">';
            echo'<td>'.$datos['us_unidad'].'</td>';
            echo'<td>'.$datos['us_conductor'].'</td>';
            echo'<td>'.$datos['us_obac'].'</td>'; 
            echo'<td>'.$datos['us_nbomberos'].'</td>';
            echo'<td>'.$datos['us_horasalida'].'</td>';
            echo'<td>'.$datos['us_horallegada'].'</td>';
            echo'<td>'.$datos['us_kmsalida'].'</td>';
            echo'<td>'.$datos['us_kmllegada'].'</td>';

            $display ="inline";
            if ($_SESSION['permiso']!=4) {
            $display="none";
            }
            echo '<td><button style="display:'.$display.';" id="'.$datos['id_unidad_servicio'].'"type ="button" class="btn bg-'.($datos['us_sgas']>0?"white":"navy").' sgasid" onclick="cargasgasmodal(this.id)"'.($datos['us_sgas']>0?"disabled":"").'>sgas</button></td>';
            
            echo'<td>';
            echo'<button style="display:'.$display.';" id="'.$datos['id_unidad_servicio'].'" class="btn btn-'.($datos['us_kmllegada']>0?"light":"primary").' completar" onclick="cargar(this.id)"'.($datos['us_kmllegada']>0?"disabled":"").'>COMPLETAR</button>';
            
            echo'<input id="autorizadopor" input type="hidden" value="'.$datos['us_autorizado'].'">';

            
            echo '</td>';
            echo'<td>';
            echo'<button id="'.$datos['id_unidad_servicio'].'"class="btn btn-warning copiar" >c</button>';
            echo'</td>';
            echo'</tr>';
          };
        };

            echo '</tbody>';
          echo '</table>';   
        echo '</div>';
       echo '</div>';
      echo '</div>' ;


        echo '<!-- Modal footer -->';
        echo '<div class="modal-footer">';
          
          
         echo ' <button type="button" class="btn btn-primary" onclick="limpiar()">Cerrar/Actualizar</button>';
        
        echo '</div>';

      echo '</div>';
   echo '</div>';

                  
?>
<script>

  $('.copiar').click(function(){
  

    var variable1 =$(this).parents('tr').find('td:first').html();//unidad
    var variable2 =$("#direccionserv").val();//direccion
    var variable3 =$("#motivoserv").val();//motivo
    var variable4 =$(this).parents('tr').find('td:nth-child(2)').html();//conductor
    var variable5 =$(this).parents('tr').find('td:nth-child(3)').html();//obac
    var variable6 =$(this).parents('tr').find('td:nth-child(4)').html();//nbomberos
    var variable7 =$("#autorizadopor").val();//atorizado por

    var areadetexto = document.createElement("textarea");
    areadetexto.setAttribute("id","datoxx");
    document.body.appendChild(areadetexto);

    $("#datoxx").text("*Nuevo 6-13* \n Unidad: *"+variable1+"*    Donde: *"+variable2+"* \n Motivo: *"+variable3+"*\n Conductor:*"+variable4+"*\n OBAC: *"+variable5+"*      Total Bomberos: *"+variable6+"*\nAutorizado Por: *"+variable7+"*");
    console.log("copiando texto");
    $("#datoxx").select();
    document.execCommand("copy");
    $("#datoxx").remove();




});

  $("#actulizardatoscarro").on('submit', function(e) {
     
      e.preventDefault();


      var datoservicio = $('.loadfolio').attr('id');

      var ksalida = $("input#kms").val();
      var hsalida = $("input#hrsa").val();
      var kllegada = $("input#kmll").val();
      var hllegada = $("input#hrll").val();
      var horallegada =$("input#horall").val();

    console.log(datoservicio);
    


      if (kllegada<=ksalida) {
        alert("El KM de llegada o el Hora de llegada tienen problemas deben ser mayores al de salida");
                  
        } else {
            myajax();

          setTimeout(function() {
              $("#completarDatosCarro").modal('hide');
              $("#verTodo").load('cargadetalleservicio.php',{
                  x:datoservicio
                }); 
              $("#verTodo").modal('show');      
            },500);
        };
  });

  function cargasgasmodal(id){
    var sgasserviciox = $("#sgasx").val();
  $("#sgasOpSelect").load('sgas.php',{
        sgasid:id,
        sgasservicio:sgasserviciox
  });
  $("#ingresosgas").modal('show');
};

</script>