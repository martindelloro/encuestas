<div class="tab-pane active" id="reportesVariables">

	<?php echo $this->Form->create("Reporte") ?>
	<div class="well contenedor-well">
		<span class="label label-titular">PASO 1</span> <span
			class="label label-titular">Seleccione una encuesta</span>
		<?php echo $this->Form->input("encuesta_id",array("type"=>"select","options"=>$encuestas,"label"=>false,"empty"=>true)) ?>
	</div>

	<div class="well contenedor-well" id="paso2">
		<span class="label label-titular">PASO 2</span> <span
			class="label label-titular">Seleccione las preguntas</span>
		<div class="row-fluid">
			<div class="span4">
				<span class="label label-titular">Variable X</span>
				<?php echo $this->Form->input("x",array("type"=>"select","options"=>null,"label"=>false,"empty"=>true)) ?>
			</div>
			<div class="span4">
				<span class="label label-titular">Variable Y</span>
				<?php echo $this->Form->input("y",array("type"=>"select","options"=>null,"label"=>false,"empty"=>true)) ?>
			</div>
			<div class="span4">
				<span class="label label-titular">Tipo Grafico</span>
				<?php echo $this->Form->input("tipoGrafico",array("type"=>"select","options"=>null,"label"=>false))?>
			</div>
		</div>
	</div>

	<div class="well contenedor-well" id="paso3">
		<span class="label label-titular">PASO 3</span> <span
			class="label label-titular">Seleccione filtros (opcional)</span>
		<div class="row-fluid">
			<div class="span4">
				<span class="label label-titular">Filtro 1</span>
				<?php echo $this->Form->input("x",array("type"=>"select","options"=>null,"label"=>false,"empty"=>true)) ?>
			</div>
			<div class="span4">
				<span class="label label-titular">Variable Y</span>
				<?php echo $this->Form->input("y",array("type"=>"select","options"=>null,"label"=>false,"empty"=>true)) ?>
			</div>
			<div class="span4">
				<span class="label label-titular">Tipo Grafico</span>
				<?php echo $this->Form->input("tipoGrafico",array("type"=>"select","options"=>null,"label"=>false))?>
			</div>
		</div>
	</div>

	<?php echo $this->Form->end() ?>
	<?php echo $this->Ajax->observeField("ReporteEncuestaId",array("url"=>array("controller"=>"reportes","action"=>"buscarPreguntas","variables"),"update"=>"paso2","before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>
	<?php echo $this->Ajax->observeField("ReporteEncuestaId",array("url"=>array("controller"=>"reportes","action"=>"buscarPreguntas","filtros"),"update"=>"paso3","before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>
	<?php echo $this->Js->writeBuffer(); ?>

	<script type="text/javascript">
	$("#paso2").block({message:null});
 	$("#paso3").block({message:null}); 

</script>

</div>


