

<?php echo $this->Form->create("Encuestas"); ?>

<div class="well botones"> 
	<?php echo $this->Ajax->link("Agregar Pregunta",array("controller"=>"preguntas","action"=>"crear"),array("class"=>"btn btn-inverse","before"=>"modales('crearPregunta','modal-ficha')","complete"=>"fin_ajax('crearPregunta')","update"=>"crearPregunta")); ?>
</div>

<div class='row-fluid' id="contenedor-preguntas">
	<div class="row-fluid preguntas-label">
	<div class="span6">
		<div class="label">Nombre de la pregunta</div>
	</div>
	<div class="span2">
		<div class="label">Tipo de la pregunta</div>
	</div>
	<div class="span2">
		<div class="label"># de opciones</div>
	</div>
	<div class="span2">
		<div class="label"># de validaciones</div>
	</div>
</div>
	
</div>


<?php echo $this->Form->end(); ?>
<?php echo $this->Js->writeBuffer(); ?>