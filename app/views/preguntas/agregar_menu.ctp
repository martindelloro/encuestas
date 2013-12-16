<div class="row-fluid" class="pregunta" id="pregunta<?php echo $pregunta["Pregunta"]["id"] ?>">
    <input type="hidden" id="EncuestaPreguntas<?php echo $pregunta["Pregunta"]["id"] ?>" value="<?php echo $pregunta["Pregunta"]["id"] ?>" name="data[Preguntas][]" />
	<div class="span6">
		<?php echo $pregunta["Pregunta"]["nombre"] ?>
	</div>
	<div class="span2">
		<?php echo $pregunta["Tipo"]["nombre"] ?>
	</div>
	<div class="span1">
		<?php if($pregunta["Tipo"]["id"] == 4 || $pregunta["Tipo"]["id"] == 5){ echo $pregunta["Pregunta"]["opcion_count"]; } ?>
	</div>
	<div class="span1">
				
	</div>
	<div class="span2">
		<?php echo $this->Ajax->link("<i class='icon-edit'> Editar </i>",array("controller"=>"preguntas","action"=>"editar",$pregunta["Pregunta"]["id"]),array("escape"=>false,"before"=>"modales('editarPregunta','modal-ficha')","complete"=>"fin_ajax('editarPregunta')","update"=>"editarPregunta")) ?>
	</div>
</div>

<script type="text/javascript">
	$("#pregunta<?php echo $pregunta["Pregunta"]["id"]; ?>").prependTo(".contenedor-preguntas");
	$("#crearPregunta").modal("hide");
</script>
<?php echo $this->Js->writeBuffer(); ?>
<?php echo $this->Mensajes->mostrar() ?>