<div class="tab-pane active" id="reportesVariables">

	<?php echo $this->Form->create("Reporte") ?>
	<div class="well contenedor-well">
		<span class="label label-titular">PASO 1</span> <span
			class="label label-titular">Seleccione una encuesta</span>
		<?php echo $this->Form->input("encuesta_id",array("type"=>"select","options"=>$encuestas,"label"=>false,"empty"=>true)) ?>
	</div>

	<div class="well contenedor-well" id="paso2">
		<?php echo $this->element("/reportes/variables"); ?>
	</div>

	<div class="well contenedor-well" id="paso3">
		<?php echo $this->element("/reportes/filtros") ?>
	</div>

	<?php echo $this->Ajax->submit("Crear subreporte",array("url"=>array("controller"=>"reportes","action"=>"crear"),"before"=>"inicia_ajax()","update"=>"generados","complete"=>"fin_ajax()","class"=>"btn btn-inverse")); ?>
	
	<?php echo $this->Form->end() ?>
	<?php echo $this->Ajax->observeField("ReporteEncuestaId",array("url"=>array("controller"=>"reportes","action"=>"buscarPreguntas","variables"),"update"=>"paso2","before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>
	<?php echo $this->Ajax->observeField("ReporteEncuestaId",array("url"=>array("controller"=>"reportes","action"=>"buscarPreguntas","filtros"),"update"=>"paso3","before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>
	<?php echo $this->Js->writeBuffer(); ?>

	<script type="text/javascript">
	$("#paso2").block({message:null});
 	$("#paso3").block({message:null}); 

</script>

</div>


