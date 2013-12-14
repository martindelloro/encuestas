<div class="row-fluid" id="pregunta<?php echo $pregunta["Pregunta"]["id"] ?> ">
	<div class="span6">
		<div class="label">Nombre de la pregunta</div>
		<?php echo $pregunta["Pregunta"]["nombre"] ?>
	</div>
	<div class="span2">
		<div class="label">Tipo de la pregunta</div>
		<?php echo $pregunta["Tipo"]["nombre"] ?>
	</div>
	<div class="span2">
		<div class="label"># de opciones</div>
		<?php if($pregunta["Tipo"]["id"] == 4 || $pregunta["Tipo"]["id"] == 5){ echo $pregunta["Pregunta"]["opcion_count"]; } ?>
	</div>
	<div class="span2">
		<div class="label"># de validaciones</div>
		<?php echo count($pregunta["Validacion"]) ?>
	</div>
</div>

<script type="text/javascript">
	$("#pregunta<?php echo $pregunta["Pregunta"]["id"]; ?>").prependTo("#contenedor-preguntas");
	$("#crearPregunta").modal("hide");
</script>

<?php echo $this->Mensajes->mostrar() ?>