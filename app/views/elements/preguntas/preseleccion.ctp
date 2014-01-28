<div class="tab-pane" id="preSeleccionadas">


<div class="row-fluid">
	<div class="span12 well titulo-general">Preguntas Pre seleccionadas</div>
</div>

<div class="row-fluid">
	<div class="span8 preguntas-label">
		<div class="label">Nombre de la pregunta</div>
	</div>
	<div class="span2 preguntas-label">
		<div class="label">Tipo de la pregunta</div>
	</div>
	<div class="span2"></div>
</div>

<div class="contenedor-preguntas" id="preguntasPre">
</div>

<?php echo $this->Js->writeBuffer(); ?>

<script type="text/javascript">
	$("#preguntasPre").on("click",".icon-remove",function(){
		preguntaId = $(this).parents(".pregunta").data("id");
		$(this).parents(".pregunta").remove();
		preSeleccionadas.splice(preguntaId,1);
		$("#preguntasListado input[value='"+preguntaId+"']").prop("checked",false);
	});
	
</script>

</div> <!-- FIN DIV TAB-PANE PRESELECCIONADAS  -->