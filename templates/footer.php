
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Imagina un mundo de soluciones digitales, TwisterEvolution
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> Todos los derechos Reservados.
  </footer>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>

<script src="js/moment.min.js"></script>
<script src="js/es.js"></script>

<script src="js/adminlte.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script src="js/icheck.min.js"></script>

<script src="js/sweetalert2.all.min.js"></script>
<script src="js/insertar-ajax.js"></script>
<script src="js/datos-carro.js"></script>



<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


<script>

    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY"     : "300px",
      "scrollCollapse": true,
      "order"       : [[ 2, "asc" ] ],
      "language"    :{"search":"Buscar", "zeroRecords":"Sin Resultados Coincidentes"},
      
      "columnDefs": [
          {targets:2, render:function(data){return moment(data).format('DD/MMM/YY')}}, 
          { width: "60px", targets: 2 },
          { width: "180px", targets: 4 },
          
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print', {extend:'colvis',text:"Mostra/ocultar Columnas"}
        ]
      
      
    })
  
</script>


<script>
  $('#example1 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input class="input-sm" type="text" placeholder="B. '+title+'" />' );
    } );
   
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY"     : "300px",
      "scrollCollapse": true,
      "order": [[ 0, "desc" ]],
      "language"    :{"search":"Buscar", "zeroRecords":"Sin Resultados Coincidentes"},
      "columnDefs": [
          {targets:3, render:function(data){return moment(data).format('DD/MMM/YY')}}, 
         
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print', {extend:'colvis',text:"Mostra/ocultar Columnas"}
        ]   


      
  });


</script>

<script>


   var table = $('#example1').DataTable();

    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
</script>



<script>
  $(function () {
   
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY":        "380px",
      "scrollCollapse": true,
      "order": [[ 0, "asc" ] ]
      
      
      
    })
  })
</script>

<script>

  $(function () {
   
    $('#example4').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY":        "333px",
      "scrollCollapse": true,
      "order": [[ 0, "desc" ]]
     
  });
});



  



//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-red',
      radioClass   : 'iradio_flat-red'
    })

    
  
</script>

<script>
  $(function () {
   
    $('#example8').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY"     : "300px",
      "scrollCollapse": false,
      "order": [[ 0, "desc" ]],
      "language"    :{"search":"Buscar", "zeroRecords":"Sin Resultados Coincidentes"},
      
      "columnDefs": [
          {targets:1, render:function(data){return moment(data).format('DD/MMM/YY')}}, 
          //{className: "text-center", targets: 1 }
          
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print', {extend:'colvis',text:"Mostra/ocultar Columnas"}
        ]   
  });
});
</script>

<script>
  $(function () {
   var x = $("#fecha").html();

    $('#example9').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "scrollY"     : "300px",
      "scrollCollapse": true,
      
      "language"    :{"search":"Buscar", "zeroRecords":"Sin Resultados Coincidentes"},
      
      "columnDefs": [
           
          {className: "dt-center", targets: '_all' },
          
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', { extend: 'pdf', messageTop: 'RESUMEN CONTROL DE EQUIPOS  '.concat(x)}, 'print', {extend:'colvis',text:"Mostra/ocultar Columnas"},
           
        ]   
  });
});
</script>





</body>
</html>

