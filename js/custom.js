$(function () {
	$.fn.reset = function () {
		$(this).each (function() { this.reset(); });
	}

	toastr.options = {
		closeButton: true,
		debug: false,
		newestOnTop: false,
		progressBar: false,
		positionClass: "toast-top-right",
		preventDuplicates: true,
		showDuration: "300",
		hideDuration: "1000",
		timeOut: "5000",
		extendedTimeOut: "1000",
		showEasing: "swing",
		hideEasing: "linear",
		showMethod: "fadeIn",
		hideMethod: "fadeOut"
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
            	if(respuesta.ancho == 640 && respuesta.alto == 640){
            		toastr["success"]("El ancho de la imagen es "+respuesta.mensajeAncho+" tamaño que la solicitada y el largo de la imagen es "+respuesta.mensajeAlto+" tamaño a la solicitada.");
            	} else {
            		toastr["info"]("El ancho de la imagen es "+respuesta.mensajeAncho+" tamaño que la solicitada y el largo de la imagen es "+respuesta.mensajeAlto+" tamaño a la solicitada.");
            	}
                $('input#submit').attr('disabled', false);
            }
        })            
        return false;
		//$('form#formulario').reset();
	});
});