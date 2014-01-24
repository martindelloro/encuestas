
function modales(id,clase){
    $(".cargando").modal({backdrop:'static'});
    $("body").append("<div id='"+id+"' class='modal hide fade in "+clase+"' ></div>");
    $("#"+id).on("hidden",function(){
    	// modalId = $("#"+id);
     //	$(modalId).remove();
    });
}

function inicia_ajax(){
    $(".cargando").modal({backdrop:'static'});
}

function fin_ajax(id){
    if(typeof(id) != 'undefined'){
       $("#"+id).modal({backdrop:'static',modalOverflow:true});
    }
    $(".cargando").modal('hide');
}
 

function disminuir_paginador(){
    $(".numero_paginador").each(function(){
      valor = $(this).html();
      valor = valor - 1;
      $(this).html(valor);
    });
}

$.fn.exists = function () {
    return this.length !== 0;
}


function isInArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}


function armar_ajax(evento,elemento){
	controller = $(elemento).data('controller');
	action     = $(elemento).data('action');
	rutina     = $(elemento).data('rutina');
	
	switch(controller){
		case 'grupos':
			    id_grupo = $(elemento).data('id-grupo');
				switch(rutina){
					case 'modal':
						id = controller+"_"+id_grupo;
						modales(id,"modal-ficha");
						inicia_ajax();
						$.ajax({async:true, type:'post', complete:function(request, json) {$('#'+id).html(request.responseText); fin_ajax(id)}, url:'/usuarios_v2/'+controller+'/'+action+'/'+id_grupo});
				}
	
	}
	
	evento.stopPropagation();
	
}
