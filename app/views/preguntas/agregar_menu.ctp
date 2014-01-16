<div class="row-fluid pregunta" id="pregunta<?php echo $pregunta["Pregunta"]["id"] ?>">
    <div class="span8">
		<span><?php echo $pregunta["Pregunta"]["nombre"] ?></span>
	</div>
	<div class="span2">
		<span><?php echo $pregunta["Tipo"]["nombre"] ?></span>
	</div>
	<div class="span2 botones">
		<?php echo $this->Ajax->link("<i class='icon-remove'></i>",array("controller"=>"preguntas","action"=>"borrar",$pregunta["Pregunta"]["id"]),array("escape"=>false,"class"=>"btn-mini btn-inverse","before"=>"inicia_ajax()","complete"=>"fin_ajax()","update"=>"exec_js")) ?>
		<?php echo $this->Ajax->link("<i class='icon-edit'></i>",array("controller"=>"preguntas","action"=>"editar",$pregunta["Pregunta"]["id"]),array("escape"=>false,"class"=>"btn-mini btn-inverse","before"=>"modales('editarPregunta','modal-ficha')","complete"=>"fin_ajax('editarPregunta')","update"=>"editarPregunta")) ?>
		<?php echo $this->Ajax->link("<i class='icon-eye-open'></i>",array("controller"=>"preguntas","action"=>"ver",$pregunta["Pregunta"]["id"]),array("escape"=>false,"class"=>"btn-mini btn-inverse","before"=>"modales('verPregunta','modal-ficha')","complete"=>"fin_ajax('verPregunta')","update"=>"verPregunta")) ?>
		<i class="icon-arrow-up boton-posicion"></i>
		<i class="icon-arrow-down boton-posicion"></i>
	</div>
	<input type="hidden" id="EncuestaPreguntas<?php echo $pregunta["Pregunta"]["id"] ?>" value="<?php echo $pregunta["Pregunta"]["id"] ?>" name="data[Preguntas][]" />
</div>

<script type="text/javascript">
	$("#pregunta<?php echo $pregunta["Pregunta"]["id"]; ?>").prependTo(".contenedor-preguntas");
	$("#crearPregunta").modal("hide");
</script>
<?php echo $this->Js->writeBuffer(); ?>
<?php echo $this->Mensajes->mostrar() ?>