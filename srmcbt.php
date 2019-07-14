
<?php 
      include_once 'funciones/bd_conexion.php';
      include_once 'templates/head.php';
      include_once 'templates/header.php';
      include_once 'templates/asidebar.php';
      
?>

   
  
  
<div class="content-wrapper">

<div id="container">
  <div class="col-md-6" id="grafic1">
    
  </div>
  <div class="col-md-6" id="grafic2">
    
  </div>
   
</div>

<div>
    <button data-toggle="modal" data-target="#cobroMensual" type="text">Ingrese Estado de pago cursado</button>

    <button data-toggle="modal" data-target="#totalTrabajadores" type="text">Trabajadores Diarios</button>
    
</div>


<script type="text/javascript">

Highcharts.chart('grafic1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false,
        
    },

    title: {
        text: 'NIEVEL DE GESTION<br><b>SRM</b>',
        //align: 'center',
        //verticalAlign: 'middle',
        //y: 40
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.0f}</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '165%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Total SRM´s',
        innerSize: '35%',
        data: [
            ['Sin Procesar',30],
            ['Procesada SIN fecha', 10],
            ['Procesada CON fecha', 20],
            
            ['Cerrada ', 10],

            
        ],
        colors: ['#732626', '#ff9900', '#ffff00', '#009900'],
    }]

    

});

    </script>
    <script type="text/javascript">

Highcharts.chart('grafic2', {
     chart: {
        type: 'line'
    },
    title: {
        text: 'Cierre mensual de SRM vs SRM ingresadas'
    },
    subtitle: {
        text: 'MaterialMayor'
    },
    xAxis: {
        categories: ['enero', 'febrero', 'marzo', 'abril']
    },
    yAxis: [{ // Primary yAxis
        labels: {
            format: ' {value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Masa laboral Mes',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
    },

    series: [{
        name: 'SRM´s ingresadas',
        type: 'column',
        data: [ 10, 20, 30, 40],
        
        tooltip: {
            valuePrefix: 'total '
        }
    }, 

    {
        name: 'SRM´s Cerradas',
        type: 'column',
        data: [3, 5, 30, 12],
        tooltip: {
            valuePrefix: 'Total '
        }
    },


    ]
});

    </script>
  

  <?php 
      include_once "templates/footer.php";  
      include_once 'templates/modales.php';
  ?>
</html>
