$(document).ready(function(){
	$(document).on("keyup","#Cbuscar",function(){
		var campo = $(this).val();

		$.ajax({
			url: "../controller/filtro.php",
			data: "producto="+campo,
			type: "GET",
			success: function(datos){
				$("tbody").html(datos);
			}
		});
	});
});