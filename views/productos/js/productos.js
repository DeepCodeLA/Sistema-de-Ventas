$(document).ready(function() {

    $(document.body).on('click', ".pagina", function() {
        paginacion($(this).attr("pagina"));
    });

    var paginacion = function(pagina) {
        var pagina = 'pagina=' + pagina;
		
        $.post(_ruta_ + 'productos/paginacionDinamicaproductos', pagina , function(data) {
            $("#lista_registros").html('');
            $("#lista_registros").html(data);
        });

    };

    $(".ventanaproducto").fancybox({
        'showCloseButton': true,
        'width': 800,
        'height': 500,
        'autoSize': false,
        'autoDimensions': false,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'type': 'iframe',
        'beforeClose': function() {
            window.location.reload();
        }

    });  
	
});

function borrar_producto(id){
        var valor = $(this).parent().parent().attr('id');
        var parent = $(this).parent().parent();

        fancyConfirm("Est&aacute; seguro que desea eliminar el registro?",
                function() {
                    var respuesta = $.post(_ruta_ + 'productos/eliminarproducto/'+ id);
                    respuesta.done(function(data) {
                        if ($.isEmptyObject(data)) {
                                 window.location.reload();
                        } else {
                            fancyAlert('Error eliminando el registro tiene datos asociados.');
                        }
                    });
                },
                function() {
                    return false;
                });
    }