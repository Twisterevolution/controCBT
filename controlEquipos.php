

      <?php 
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'templates/header.php';
        include_once 'templates/asidebar.php';
        include_once 'funciones/funciones.php';     

        $sql = "SELECT * FROM servicios";
        $resultado = $conn->query($sql);

        $sql2 = "SELECT * FROM unidades WHERE ocupado = 0";
        $resultado2 = $conn->query($sql2);
        $resultado3 = $conn->query($sql2);
        //$ultimo2 =  "SELECT max(idcontrol) FROM controlunidad order by idcontrol desc limit 1";
        $ultimo =  "SELECT max(idcontrol) FROM controlunidad";
        $ultimo1 = $conn->query($ultimo);
        $ultimoid = $ultimo1->fetch_array();

       // $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0]";
       // $res3 = $conn->query($sql3);
       // $ultimoxx = $res3->fetch_array();

      ?> 
     <?php 
          $display ="";
          if ($_SESSION['permiso']!=4) {
          $display="none";
          }                  
      ?>

      <?php 
       $disable ="";
        if ($_SESSION['permiso']!=4) {
        $disable="disabled";
        } 
      ?>


<div class="wrapper" id="">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id=""> 
      
    <form action="nuevo-control.php" method="POST" accept-charset="utf-8" id="nuevocontrolx" name="nuevocontrolx">  
        
      <section class="content-header">

        <div class="container">
            <h5 class="titulolibro613" align=""><b>CONTROL DE EQUIPOS</b></h5> 

            <div class="col-md-3">
              
            <button type="button" onclick="pasarControl()" class="btn btn-warning">&nbsp<i class="fa fa-refresh"></i></button>
              <button class="btn btn-primary" type="submit" id="enviarNuevoControl"><i class="fa fa-save"></i>Guardar</button>
            </div>

            <div class="col-md-9">
              <div class="form-inline">
              
              <label class="control-label">Fecha Control ✓: </label><input class="form-control factual" type="date" name="fechacontrol" value="<?php echo date("Y-m-d"); ?>"> 

              <label class="minimal">8:15&nbsp</label><input class="flat-red" type="radio" name="hcontrol" value="1">
              
              <label class="minimal">&nbsp&nbsp12:15&nbsp</label><input class="flat-red" type="radio" name="hcontrol" value="2" required>
              
              <label class="minimal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No-Realizado &nbsp</label><input class="flat-red" type="radio" name="hcontrol" value="3">
             
              <input type="text" name="motivo" placeholder="Motivo">
              </div>  
            </div>
          
        </div>

      </section>

      <!-- Main content -->
<section class="content container-fluid">
  <div class="boxx" id="">           
    <div class="boxx-body especial">

      <div class="col-md-4">  
        <div class="col-md-12 p-5">
          <div class="col-md-12">

            <label>DISP</label><input type="radio" name="db1" class="flat-reds" onclick="uncheckRadio(this)" value="1">

            <input id="sb1" name="sb1" type="checkbox" checked data-toggle="toggle" data-on="B1-> 0-9" data-off="B1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

            <input name="nb1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini"  value="0">
            <input type="text" class="alto" name="novb1" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
          </div>
        </div>        

        <div class="col-md-12 p-5">
          <div class="col-md-12">

            <label>DISP</label><input type="radio" name="db2" class="flat-reds" onclick="uncheckRadio(this)" value="1">

            <input name="sb2" type="checkbox" checked data-toggle="toggle" data-on="B2-> 0-9" data-off="B2-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

            <input name="nb2" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
            <input type="text" class="alto" name="novb2" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B2' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
          </div>
        </div>

                  <div class="col-md-12 p-5">
                      <div class="col-md-12">
                        
                        <label>DISP</label><input type="radio" name="db3" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                        
                        <input name="sb3" type="checkbox" checked data-toggle="toggle" data-on="B3-> 0-9" data-off="B3-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                        <input name="nb3" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                        <input type="text" class="alto" name="novb3" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B3' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                        
                      <label>DISP</label><input type="radio" name="db4" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      <input name="sb4" type="checkbox" checked data-toggle="toggle" data-on="B4-> 0-9" data-off="B4-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb4" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb4" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B4' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                        
                      <label>DISP</label><input type="radio" name="db5" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                     
                      <input name="sb5" type="checkbox" checked data-toggle="toggle" data-on="B5-> 0-9" data-off="B5-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb5" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb5" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B5' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                      <label>DISP</label><input type="radio" name="db6" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                      <input name="sb6" type="checkbox" checked data-toggle="toggle" data-on="B6-> 0-9" data-off="B6-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb6" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb6" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B6' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                      <label>DISP</label><input type="radio" name="db7" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      <input name="sb7" type="checkbox" checked data-toggle="toggle" data-on="B7-> 0-9" data-off="B7-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb7" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb7" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B7' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                      <label>DISP</label><input type="radio" name="db8" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      <input name="sb8" type="checkbox" checked data-toggle="toggle" data-on="B8-> 0-9" data-off="B8-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb8" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb8" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B8' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                      <label>DISP</label><input type="radio" name="db9" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      <input name="sb9" type="checkbox" checked data-toggle="toggle" data-on="B9-> 0-9" data-off="B9-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb9" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb9" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B9' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                      <label>DISP</label><input type="radio" name="db10" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      <input name="sb10" type="checkbox" checked data-toggle="toggle" data-on="B10-> 0-9" data-off="B10-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb10" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb10" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B10' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                       <label>DISP</label><input type="radio" name="db11" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                     
                      <input name="sb11" type="checkbox" checked data-toggle="toggle" data-on="B11-> 0-9" data-off="B11-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb11" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb11" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B11' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                       <label>DISP</label><input type="radio" name="db12" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                     
                      <input name="sb12" type="checkbox" checked data-toggle="toggle" data-on="B12-> 0-9" data-off="B12-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb12" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb12" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B12' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                       <label>DISP</label><input type="radio" name="db13" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                    
                      <input name="sb13" type="checkbox" checked data-toggle="toggle" data-on="B13-> 0-9" data-off="B13-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb13" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb13" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B13' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                    <div class="col-md-12 p-5">
                      <div class="col-md-12">
                       <label>DISP</label><input type="radio" name="db14" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                      
                      
                      <input name="sb14" type="checkbox" checked data-toggle="toggle" data-on="B14-> 0-9" data-off="B14-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                      <input name="nb14" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                      <input name="novb14" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'B14' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                      </div>
                    </div>

                      
                    <div class="col-md-12 p-5 alert callout callout-danger" >
                      <h4><b>Unidades 0-8:</b></h4> 
                        
                        <div class="col-md-12 aqui container">
                          
                            <span class="b1"></span><span class="b2"></span><span class="b3"></span><span class="b4"></span><span class="bx4"></span><span class="b5"></span><span class="b6"></span><span class="bx6"></span><span class="b7"></span><span class="bx7"></span><span class="b8"></span><span class="b9"></span><span class="b10"></span><span class="bx10"></span><span class="b11"></span><span class="b12"></span><span class="b13"></span><span class="b14"></span>

                            <span class="q1"></span>
                            <span class="m1"></span><span class="m7"></span>
                            <span class="g4"></span>
                            <span class="xh2"></span><span class="hx2"></span>
                            <span class="r3"></span><span class="r5"></span><span class="rx3"></span>
                            <span class="s8"></span>
                            <span class="z13"></span>
                            <span class="ba6"></span>

                            <span class="k1"></span><span class="k2"></span><span class="k3"></span><span class="k4"></span>
                            <span class="j1"></span><span class="j2"></span><span class="j3"></span>
                            <span class="lt1"></span>                     

                        </div>
                      </div>
      </div>
      <div class="col-md-4">
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dbx4" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sbx4" type="checkbox" checked data-toggle="toggle" data-on="Bx4-> 0-9" data-off="Bx4-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nbx4" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novbx4" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'BX4' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>

                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dbx6" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sbx6" type="checkbox" checked data-toggle="toggle" data-on="Bx6-> 0-9" data-off="Bx6-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nbx6" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novbx6" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'BX6' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>

                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dbx7" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sbx7" type="checkbox" checked data-toggle="toggle" data-on="Bx7-> 0-9" data-off="Bx7-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nbx7" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novbx7" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'BX7' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>

                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dbx10" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    <input name="sbx10" type="checkbox" checked data-toggle="toggle" data-on="Bx10-> 0-9" data-off="Bx10-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nbx10" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novbx10" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'BX10' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dba6" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                  
                    <input id="sba6" name="sba6" type="checkbox" checked data-toggle="toggle" data-on="Ba6-> 0-9" data-off="Ba6-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    

                    <input name="nba6" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novba6" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'BA6' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                    <label>DISP</label><input type="radio" name="dr3" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sr3" type="checkbox" checked data-toggle="toggle" data-on="R3-> 0-9" data-off="R3-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nr3" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novr3" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'R3' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dr5" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sr5" type="checkbox" checked data-toggle="toggle" data-on="R5-> 0-9" data-off="R5-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nr5" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novr5" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'R5' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="drx3" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="srx3" type="checkbox" checked data-toggle="toggle" data-on="Rx3-> 0-9" data-off="Rx3-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nrx3" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novrx3" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'RX3' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dh2" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sh2" type="checkbox" checked data-toggle="toggle" data-on="H2-> 0-9" data-off="H2-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nh2" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novh2" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'H2' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dhx2" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="shx2" type="checkbox" checked data-toggle="toggle" data-on="Hx2-> 0-9" data-off="Hx2-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nhx2" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novhx2" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'HX2' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                    <label>DISP</label><input type="radio" name="dm1" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                   
                    <input name="sm1" type="checkbox" checked data-toggle="toggle" data-on="M1-> 0-9" data-off="M1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nm1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novm1" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'M1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dm7" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sm7" type="checkbox" checked data-toggle="toggle" data-on="M7-> 0-9" data-off="M7-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nm7" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novm7" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'M7' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dq1" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                   
                    <input name="sq1" type="checkbox" checked data-toggle="toggle" data-on="Q1-> 0-9" data-off="Q1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nq1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novq1" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'Q1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>  
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                    <label>DISP</label><input type="radio" name="dg4" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                  
                    <input name="sg4" type="checkbox" checked data-toggle="toggle" data-on="G4-> 0-9" data-off="G4-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="ng4" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novg4" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'G4' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>

                    <div class="col-md-12 p-5 alert callout callout-warning" >
                      <h4><b>Disponibles</b></h4>
                        <div class="col-md-12 aqui2 container">
                          
                          <p>


                          <span class="db1"></span><span class="db2"></span><span class="db3"></span><span class="db4"></span><span class="dbx4"></span><span class="db5"></span><span class="db6"></span><span class="dbx6"></span><span class="db7"></span><span class="dbx7"></span><span class="db8"></span><span class="db9"></span><span class="db10"></span><span class="dbx10"></span><span class="db11"></span><span class="db12"></span><span class="db13"></span><span class="db14"></span>

                          <span class="dq1"></span>
                          <span class="dm1"></span><span class="dm7"></span>
                          <span class="dg4"></span>
                          <span class="dh2"></span><span class="dhx2"></span>
                          <span class="dr3"></span><span class="dr5"></span><span class="drx3"></span>
                          <span class="ds8"></span>
                          <span class="dz13"></span>
                          <span class="dba6"></span>

                          <span class="dk1"></span><span class="dk2"></span><span class="dk3"></span><span class="dk4"></span>
                          <span class="dj1"></span><span class="dj2"></span><span class="dj3"></span>
                          <span class="dlt1"></span>

                          </p>
                        
                        </div>
                     </div>
      </div>
      <div class="col-md-4">
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="ds8" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="ss8" type="checkbox" checked data-toggle="toggle" data-on="S8-> 0-9" data-off="S8-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="ns8" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novs8" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'S8' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dz13" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sz13" type="checkbox" checked data-toggle="toggle" data-on="Z13-> 0-9" data-off="Z13-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nz13" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novz13" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'Z13' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dk1" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sk1" type="checkbox" checked data-toggle="toggle" data-on="K1-> 0-9" data-off="K1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nk1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novk1" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'K1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dk2" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sk2" type="checkbox" checked data-toggle="toggle" data-on="K2-> 0-9" data-off="K2-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nk2" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novk2" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'K2' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dk3" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sk3" type="checkbox" checked data-toggle="toggle" data-on="K3-> 0-9" data-off="K3-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nk3" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novk3" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'K3' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dk4" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sk4" type="checkbox" checked data-toggle="toggle" data-on="K4-> 0-9" data-off="K4-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nk4" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novk4" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'K4' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dj1" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sj1" type="checkbox" checked data-toggle="toggle" data-on="J1-> 0-9" data-off="J1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nj1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novj1" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'J1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dj2" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sj2" type="checkbox" checked data-toggle="toggle" data-on="J2-> 0-9" data-off="J2-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nj2" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novj2" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'J2' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dj3" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="sj3" type="checkbox" checked data-toggle="toggle" data-on="J3-> 0-9" data-off="J3-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nj3" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novj3" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'J3' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
                  <div class="col-md-12 p-5">
                    <div class="col-md-12">
                     <label>DISP</label><input type="radio" name="dlt1" class="flat-reds" onclick="uncheckRadio(this)" value="1">
                    
                    
                    <input name="slt1" type="checkbox" checked data-toggle="toggle" data-on="LT1-> 0-9" data-off="LT1-> 0-8" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="1">

                    <input name="nlt1" type="checkbox" checked data-toggle="toggle" data-on="Sin Nov." data-off="Con Noved" data-onstyle="success" data-offstyle="danger" data-width="80" data-size="mini" value="0">
                    <input name="novlt1" type="text" class="alto" value="<?php  
            
            $sql3= "SELECT * from mivista1 WHERE idcontrol = $ultimoid[0] and nombre_unidad = 'LT1' ";
            $res3 = $conn->query($sql3);
            $ultimo = $res3->fetch_array();

            echo $ultimo['5'];

            ?>">
                    </div>
                  </div>
      </div>
    </div>
  </div>
</section>
          <input type="hidden" name="b1" value="1">
          <input type="hidden" name="q1" value="2">
          <input type="hidden" name="m1" value="3">
          <input type="hidden" name="b2" value="4">
          <input type="hidden" name="h2" value="5">
          <input type="hidden" name="hx2" value="6">
          <input type="hidden" name="b3" value="7">
          <input type="hidden" name="r3" value="8">
          <input type="hidden" name="rx3" value="9">
          <input type="hidden" name="b4" value="10">
          <input type="hidden" name="bx4" value="11">
          <input type="hidden" name="g4" value="38">
          <input type="hidden" name="b5" value="12">
          <input type="hidden" name="r5" value="13">
          <input type="hidden" name="b6" value="14">
          <input type="hidden" name="bx6" value="15">
          <input type="hidden" name="b7" value="16">
          <input type="hidden" name="bx7" value="17">
          <input type="hidden" name="m7" value="18">
          <input type="hidden" name="b8" value="19">
          <input type="hidden" name="s8" value="20">
          <input type="hidden" name="b9" value="21">
          <input type="hidden" name="b10" value="22">
          <input type="hidden" name="bx10" value="23">
          <input type="hidden" name="b11" value="24">
          <input type="hidden" name="b12" value="25">
          <input type="hidden" name="b13" value="26">
          <input type="hidden" name="z13" value="27">
          <input type="hidden" name="b14" value="28">
          <input type="hidden" name="k1" value="29">
          <input type="hidden" name="k2" value="30">
          <input type="hidden" name="k3" value="31">
          <input type="hidden" name="k4" value="32">
          <input type="hidden" name="j1" value="33">
          <input type="hidden" name="j2" value="34">
          <input type="hidden" name="j3" value="35">
          <input type="hidden" name="lt1" value="36">
          <input type="hidden" name="ba6" value="37">
          <button type="button" id="adclas" style="display: none;" onclick="nuevocontrol()">aqio</button>
           </form>
          </div>
        </div>
 
  <!--...........................................................................................-->
</div>

<script>
var era;
var previo=null;
function uncheckRadio(rbutton){
if(previo &&previo!=rbutton){previo.era=false;}
if(rbutton.checked==true && rbutton.era==true){rbutton.checked=false;}
rbutton.era=rbutton.checked;
previo=rbutton;
}
</script>



 <script>
                         function pasarControl(){
                          //$(".aqui").html();
                         if ($("input[name='sb1']").prop('checked')==false) {$(".b1").text("B1 - ");}else{$(".b1").text("");}
                         if ($("input[name='sb2']").prop('checked')==false) {$(".b2").text("B2 - ");}else{$(".b2").text("");}
                         if ($("input[name='sb3']").prop('checked')==false) {$(".b3").text("B3 - ");}else{$(".b3").text("");}
                         if ($("input[name='sb4']").prop('checked')==false) {$(".b4").text("B4 - ");}else{$(".b4").text("");}
                         if ($("input[name='sbx4']").prop('checked')==false) {$(".bx4").text("Bx4 - ");}else{$(".bx4").text("");}

                         if ($("input[name='sb5']").prop('checked')==false) {$(".b5").text("B5 - ");}else{$(".b5").text("");}
                         if ($("input[name='sb6']").prop('checked')==false) {$(".b6").text("B6 - ");}else{$(".b6").text("");}
                         if ($("input[name='sbx6']").prop('checked')==false) {$(".bx6").text("Bx6 - ");}else{$(".bx6").text("");}
                         if ($("input[name='sb7']").prop('checked')==false) {$(".b7").text("B7 - ");}else{$(".b7").text("");}
                         if ($("input[name='sbx7']").prop('checked')==false) {$(".bx7").text("Bx7 - ");}else{$(".bx7").text("");}
                         if ($("input[name='sb8']").prop('checked')==false) {$(".b8").text("B8 - ");}else{$(".b8").text("");}
                         if ($("input[name='sb9']").prop('checked')==false) {$(".b9").text("B9 - ");}else{$(".b9").text("");}
                         if ($("input[name='sb10']").prop('checked')==false) {$(".b10").text("B10 - ");}else{$(".b10").text("");}
                         if ($("input[name='sbx10']").prop('checked')==false) {$(".bx10").text("Bx10 - ");}else{$(".bx10").text("");}
                         if ($("input[name='sb11']").prop('checked')==false) {$(".b11").text("B11 - ");}else{$(".b11").text("");}
                         if ($("input[name='sb12']").prop('checked')==false) {$(".b12").text("B12 - ");}else{$(".b12").text("");}
                         if ($("input[name='sb13']").prop('checked')==false) {$(".b13").text("B13 - ");}else{$(".b13").text("");}
                         if ($("input[name='sb14']").prop('checked')==false) {$(".b14").text("B14 - ");}else{$(".b14").text("");}

                         if ($("input[name='sq1']").prop('checked')==false) {$(".q1").text("Q1 - ");}else{$(".q1").text("");}
                         if ($("input[name='sm1']").prop('checked')==false) {$(".m1").text("M1 - ");}else{$(".m1").text("");}
                         if ($("input[name='sm7']").prop('checked')==false) {$(".m7").text("m7 - ");}else{$(".m7").text("");}
                         if ($("input[name='sg4']").prop('checked')==false) {$(".g4").text("G4 - ");}else{$(".g4").text("");}
                         if ($("input[name='sh2']").prop('checked')==false) {$(".xh2").text("H2 - ");}else{$(".xh2").text("");}
                         if ($("input[name='shx2']").prop('checked')==false) {$(".hx2").text("HX2 - ");}else{$(".hx2").text("");}
                         if ($("input[name='sr3']").prop('checked')==false) {$(".r3").text("R3 - ");}else{$(".r3").text("");}
                         if ($("input[name='sr5']").prop('checked')==false) {$(".r5").text("R5 - ");}else{$(".r5").text("");}
                         if ($("input[name='srx3']").prop('checked')==false) {$(".rx3").text("Rx3 - ");}else{$(".rx3").text("");}

                         if ($("input[name='ss8']").prop('checked')==false) {$(".s8").text("S8 - ");}else{$(".s8").text("");}
                         if ($("input[name='sz13']").prop('checked')==false) {$(".z13").text("Z13 - ");}else{$(".z13").text("");}

                         if ($("input[name='sba6']").prop('checked')==false) {$(".ba6").text("BA6 - ");}else{$(".ba6").text("");}

                         if ($("input[name='sk1']").prop('checked')==false) {$(".k1").text("K1 - ");}else{$(".k1").text("");}
                         if ($("input[name='sk2']").prop('checked')==false) {$(".k2").text("K2 - ");}else{$(".k2").text("");}
                         if ($("input[name='sk3']").prop('checked')==false) {$(".k3").text("K3 - ");}else{$(".k3").text("");}
                         if ($("input[name='sk4']").prop('checked')==false) {$(".k4").text("K4 - ");}else{$(".k4").text("");}

                         if ($("input[name='sj1']").prop('checked')==false) {$(".j1").text("J1 - ");}else{$(".j1").text("");}
                         if ($("input[name='sj2']").prop('checked')==false) {$(".j2").text("J2 - ");}else{$(".j2").text("");}
                         if ($("input[name='sj3']").prop('checked')==false) {$(".j3").text("J3 - ");}else{$(".j3").text("");}

                         if ($("input[name='slt1']").prop('checked')==false) {$(".lt1").text("Lt1 - ");}else{$(".lt1").text("");}



                         if ($("input[name='db1']").prop('checked')==true) {$(".db1").text("B1 - ");}else{$(".db1").text("");}
                         if ($("input[name='db2']").prop('checked')==true) {$(".db2").text("B2 - ");}else{$(".db2").text("");}
                         if ($("input[name='db3']").prop('checked')==true) {$(".db3").text("B3 - ");}else{$(".db3").text("");}
                         if ($("input[name='db4']").prop('checked')==true) {$(".db4").text("B4 - ");}else{$(".db4").text("");}
                         if ($("input[name='dbx4']").prop('checked')==true) {$(".dbx4").text("Bx4 - ");}else{$(".dbx4").text("");}
                         if ($("input[name='db5']").prop('checked')==true) {$(".db5").text("B5 - ");}else{$(".db5").text("");}
                         if ($("input[name='db6']").prop('checked')==true) {$(".db6").text("B6 - ");}else{$(".db6").text("");}
                         if ($("input[name='dbx6']").prop('checked')==true) {$(".dbx6").text("Bx6 - ");}else{$(".dbx6").text("");}
                         if ($("input[name='db7']").prop('checked')==true) {$(".db7").text("B7 - ");}else{$(".db7").text("");}
                         if ($("input[name='dbx7']").prop('checked')==true) {$(".dbx7").text("Bx7 - ");}else{$(".dbx7").text("");}
                         if ($("input[name='db8']").prop('checked')==true) {$(".db8").text("B8 - ");}else{$(".db8").text("");}
                         if ($("input[name='db9']").prop('checked')==true) {$(".db9").text("B9 - ");}else{$(".db9").text("");}
                         if ($("input[name='db10']").prop('checked')==true) {$(".db10").text("B10 - ");}else{$(".db10").text("");}
                         if ($("input[name='dbx10']").prop('checked')==true) {$(".dbx10").text("Bx10 - ");}else{$(".dbx10").text("");}
                         if ($("input[name='db11']").prop('checked')==true) {$(".db11").text("B11 - ");}else{$(".db11").text("");}
                         if ($("input[name='db12']").prop('checked')==true) {$(".db12").text("B12 - ");}else{$(".db12").text("");}
                         if ($("input[name='db13']").prop('checked')==true) {$(".db13").text("B13 - ");}else{$(".db13").text("");}
                         if ($("input[name='db14']").prop('checked')==true) {$(".db14").text("B14 - ");}else{$(".db14").text("");}

                         if ($("input[name='dq1']").prop('checked')==true) {$(".dq1").text("Q1 - ");}else{$(".dq1").text("");}
                         if ($("input[name='dm1']").prop('checked')==true) {$(".dm1").text("M1 - ");}else{$(".dm1").text("");}
                         if ($("input[name='dm7']").prop('checked')==true) {$(".dm7").text("M7 - ");}else{$(".dm7").text("");}
                         if ($("input[name='dg4']").prop('checked')==true) {$(".dg4").text("G4 - ");}else{$(".dg4").text("");}
                         if ($("input[name='dh2']").prop('checked')==true) {$(".dh2").text("H2 - ");}else{$(".dh2").text("");}
                         if ($("input[name='dhx2']").prop('checked')==true) {$(".dhx2").text("HX2 - ");}else{$(".dhx2").text("");}
                         if ($("input[name='dr3']").prop('checked')==true) {$(".dr3").text("R3 - ");}else{$(".dr3").text("");}
                         if ($("input[name='dr5']").prop('checked')==true) {$(".dr5").text("R5 - ");}else{$(".dr5").text("");}
                         if ($("input[name='drx3']").prop('checked')==true) {$(".drx3").text("Rx3 - ");}else{$(".drx3").text("");}

                         if ($("input[name='ds8']").prop('checked')==true) {$(".ds8").text("S8 - ");}else{$(".ds8").text("");}
                         if ($("input[name='dz13']").prop('checked')==true) {$(".dz13").text("Z13 - ");}else{$(".dz13").text("");}
                         if ($("input[name='dba6']").prop('checked')==true) {$(".dba6").text("BA6 - ");}else{$(".dba6").text("");}

                        if ($("input[name='dk1']").prop('checked')==true) {$(".dk1").text("K1 - ");}else{$(".dk1").text("");}
                         if ($("input[name='dk2']").prop('checked')==true) {$(".dk2").text("K2 - ");}else{$(".dk2").text("");}
                         if ($("input[name='dk3']").prop('checked')==true) {$(".dk3").text("K3 - ");}else{$(".dk3").text("");}
                         if ($("input[name='dk4']").prop('checked')==true) {$(".dk4").text("K4 - ");}else{$(".dk4").text("");}

                         if ($("input[name='dj1']").prop('checked')==true) {$(".dj1").text("J1 - ");}else{$(".dj1").text("");}
                         if ($("input[name='dj2']").prop('checked')==true) {$(".dj2").text("J2 - ");}else{$(".dj2").text("");}
                         if ($("input[name='dj3']").prop('checked')==true) {$(".dj3").text("J3 - ");}else{$(".dj3").text("");}

                         if ($("input[name='dlt1']").prop('checked')==true) {$(".dlt1").text("Lt1 - ");}else{$(".dlt1").text("");}


                       }


                       </script>

<script>
   function nuevocontrol(){     
      $("body").addClass('sidebar-collapse');
    }

    
</script>





  <?php 
      include_once 'templates/footer.php';
      include_once 'templates/modales/modales.php';
   
        
  ?>


