$(document).ready(function(){

	$('#nuevocontrolx').on('submit', function(e) {
      e.preventDefault();

      var control1 = $('#nuevocontrolx').serializeArray();

      $.ajax({
      	url: 'nuevo-control.php',
      	type: 'POST',
      	data: control1,
      })
      .done(function() {
      	console.log("success");
		Swal({
			  position: 'center',
			  type: 'success',
			  title: 'Control de Equipos se guardo correctamente',
			  showConfirmButton: false,
			  timer: 2000
			})
			setTimeout (function(){
				window.location.href = "pizarracontroles.php";
				},2333);



      })
      .fail(function() {
      	console.log("error");
      })
      .always(function() {
      	console.log("complete");
      });
      
     


    });
	 
	 $("#adclas").trigger( "click" );// ocualta cuando entras a control de equipos nuevo
	
		$('#nuevosservicios').on ('submit', function(e) {
			alert('funciona');
			e.preventDefault();

	        copiamensaje();

			var datos1 = $('#nuevosservicios').serializeArray();

			$.ajax({
				url: $('#nuevosservicios').attr('action'),
				type: $('#nuevosservicios').attr('method'),
				dataType: 'json',
				data: datos1,
				success: function(data) {
					console.log(data);
				}
			});
			

			$('#nuevoServicio').modal('hide');
			$("#nuevoServicio").on("hidden.bs.modal", function(){
				location.reload();
			});

		});

		$('#agregarcarro').on ('submit', function(e) {
			alert('cargando unidad');
			e.preventDefault();
			
			copiamensaje2();

			var datos2 = $('#agregarcarro').serializeArray();

			$.ajax({
				url: $('#agregarcarro').attr('action'),
				type: $('#agregarcarro').attr('method'),
				dataType: 'json',
				data: datos2,
				success: function(data) {
					console.log(data);
				}
			});

			$("#agregarunidad").modal('hide');
		   	location.reload();

       	});

		$('#nuevoServicio').modal('hide');
		$('#verTodo').modal('hide');
		$('#completarDatosCarro').modal('hide');


		$("#crear-admin").on('submit', function(e) {
			e.preventDefault();
			var datosnuevoadmin= $(this).serializeArray();

			$.ajax({
				url: 'insertar-admin.php',
				type: 'POST',
				data: datosnuevoadmin,

				success:function(data){
					console.log(data);

				},
				error: function(req, err){ console.log('el error ese =' + err); }
			});

			
		});

		$("#login-admin").on('submit', function(e) {
			e.preventDefault();
			var datosnuevoadmin= $(this).serializeArray();

			$.ajax({
				url: 'insertar-admin.php',
				type: 'POST',
				data: datosnuevoadmin,
				dataType: 'json',
				success:function(data){
					console.log(data);
					var result = data;
					console.log(result.respuesta);
					if (result.respuesta == "bien") {

						swal(
							'Acceso Correcto',
							'Bienvenid@'+result.usuariolog,
							'success'
							)
						setTimeout (function(){
						window.location.href = "index.php";
					},2000);
				}

				},
				error: function(req, err){ console.log('el error ese =' + err); }
			});

			
		});




		$(".modal").on("hidden.bs.modal", function(){
	    	$(this).find("input,textarea,select").val('').end()
	    	.find("input[type=checkbox], input[type=radio]")
	       	.prop("checked", "")
	       	.end();
	       	//$("#verTodo .datosTabla tr").remove().end();
	       	//$('#recargar').load('#controlservicios div#recargartabla');	
	       	//location.reload();
    	});	

    	

	setInterval(function(){
	  		location.reload();
		}, 3600000);


});	


	    

    	