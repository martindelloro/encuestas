

<?php echo $this->Form->create("Encuestas"); ?>

<div class="well botones"> 
	<?php echo $this->Ajax->link("Agregar Pregunta",array("controller"=>"preguntas","action"=>"crear"),array("class"=>"btn btn-inverse","before"=>"modales('crearPregunta','modal-ficha')","complete"=>"fin_ajax('crearPregunta')","update"=>"crearPregunta")); ?>
</div>

<div class='row-fluid'>
	<div class='span2'></div>
	
</div>


<?php echo $this->Form->end(); ?>
<?php echo $this->Js->writeBuffer(); ?>