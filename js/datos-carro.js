	function cargar(id) {
	 	console.log(id);
	  	$("#verTodo").modal('hide');
		$("#verTodo").removeData();
		//$("#verTodo .datosTabla tr").remove().end();

	    $('#datocarro').load('cargardatosunidad.php',{
	    	id:id
	    });
	    $('#completarDatosCarro').modal('show');
	};

	function myajax(){
		
 		var datosunidad = $('#actulizardatoscarro').serializeArray();
 		$.ajax({
		    url: $('#actulizardatoscarro').attr('action'),
		    type: $('#actulizardatoscarro').attr('method'),
		    dataType: 'json',
		    data: datosunidad,
		    success: function(data) {
		        console.log(data)
		    }
        });	        
	};
	



	function agregarunidad(id){
		$(".folio").html("FOLIO Nº"+id);
		$("#eldato").val(id);
		$("#datosDelServicio").load('eso.php',{
			detalle:id
		});
		$("#agregarunidad").modal('show');
	};



function copiamensaje3(){
		var variable1 =$("tr td")[0].innerHTML;
		var variable2 =$("#direccion").val();
		var variable3 =$("#motivo").val();
		var variable4 =$("tr td")[1].innerHTML; //conductor
		var variable5 =$("tr td")[2].innerHTML; //obac
		var variable6 =$("tr td")[3].innerHTML;
		var variable7 =$("#autoriza").val();


		var areadetexto = document.createElement("textarea");
		areadetexto.setAttribute("id","datoxx");
		document.body.appendChild(areadetexto);

		$("#datoxx").text("*Nuevo 6-13* \n Unidad: *"+variable1+"*    Donde: *"+variable2+"* \n Motivo: *"+variable3+"*\n Conductor:*"+variable4+"*\n OBAC: *"+variable5+"*      Total Bomberos: *"+variable6+"*\nAutorizado Por: *"+variable7+"*");
		console.log("copiando texto");
		$("#datoxx").select();
		document.execCommand("copy");
		$("#datoxx").remove();

	};






	function copiamensaje(){
		var variable1 =$("#unidad2 option:selected").text();
		var variable2 =$("#direccion2").val();
		var variable3 =$("#motivo2").val();
		var variable4 =$("#conductor2").val();
		var variable5 =$("#obac2").val();
		var variable6 =$("#nbomberos2").val();
		var variable7 =$("#autoriza2").val();

		var areadetexto = document.createElement("textarea");
		areadetexto.setAttribute("id","datoxx");
		document.body.appendChild(areadetexto);




	$("#datoxx").text("*Nuevo 6-13* \n Unidad: *"+variable1+"*    Donde: *"+variable2+"* \n Motivo: *"+variable3+"*\n Conductor:*"+variable4+"*\n OBAC: *"+variable5+"*      Total Bomberos: *"+variable6+"*\nAutorizado Por: *"+variable7+"*");
	console.log("copiando texto");
	$("#datoxx").select();
	document.execCommand("copy");
	$("#datoxx").remove();

	};
            
function copiamensaje2(){
		var variable1 =$("#unidad option:selected").text();
		var variable2 =$("#direccion").val();
		var variable3 =$("#motivo").val();
		var variable4 =$("#conductor").val();
		var variable5 =$("#obac").val();
		var variable6 =$("#nbomberos").val();
		var variable7 =$("#autoriza").val();

		var areadetexto = document.createElement("textarea");
		areadetexto.setAttribute("id","datoxx");
		document.body.appendChild(areadetexto);

		$("#datoxx").text("*Nuevo 6-13* \n Unidad: *"+variable1+"*    Donde: *"+variable2+"* \n Motivo: *"+variable3+"*\n Conductor:*"+variable4+"*\n OBAC: *"+variable5+"*      Total Bomberos: *"+variable6+"*\nAutorizado Por: *"+variable7+"*");
		console.log("copiando texto");
		$("#datoxx").select();
		document.execCommand("copy");
		$("#datoxx").remove();

	};

  
function limpiar(){
	$("#verTodo").modal('hide');
	location.reload();
	//$("#verTodo").removeData();
};

function vertodosloscarros(id) {
	console.log(id);
	$("#verTodo").load('cargadetalleservicio.php',{
		  	x:id
		}); 

	$("#verTodo").modal('show');
    $("#verTodo").on('shown.bs.modal',function(){
    	
		 					
	});




};



