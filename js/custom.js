$(function () {
	$.fn.reset = function () {
		$(this).each (function() { this.reset(); });
	}

	$('input#submit').on('click', function(e){
		e.preventDefault();
		$.ajax({
            url:  $("form#imageForm").attr('action'),
            type: $("form#imageForm").attr('method'),
            data: new FormData($("form#imageForm")[0]),
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('input#submit').attr('disabled', true);
            },
            success:function(respuesta){
                alert("El ancho de la imagen es "+respuesta.ancho+" tamaño que la solicitada y el largo de la imagen es "+respuesta.alto+" tamaño a la solicitada.");
                $('input#submit').attr('disabled', false);
            }
        })            
        return false;
		//$('form#formulario').reset();
	});
});