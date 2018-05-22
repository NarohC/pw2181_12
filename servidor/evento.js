var inicioApp=function(){
	var Aceptar = function(){
		var usuario = $("#txtUsuario").val();
		var vlave = $("#txtClavr").val();
		var parametros = "opc=validaentrada"+
						 "&usuario="+usuario+
						 "&clave="+clave+
						 "&aleaorio="+Math.random();

		$.ajax({
			cache:false,
			type: "POST",
			dataType:"json",
			url: "php/validaentrada.php"
			dat: parametros,
			success: function(response){
				if (response.respuesta==true) {
					alert("Bienvenido")
				}
				else{
					alert("usuario o clave incorrecta")
				}
			},
			error: function(xhr, ajaxOptions, thrownError){

			}

		});
	}
	$("#btnAceptar").on("click",Aceptar);
}

$(document).ready(InicioApp);