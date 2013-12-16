<?php echo $this->Mensajes->mostrar(); ?>

<?php echo $this->Form->create("Pregunta"); ?>
<div class="modal-header header-ficha azul">
    <div class="botonera-header">
    	<?php echo $this->Ajax->link("<i class='icon-save icon-white'> Guardar</i>",array("controller"=>"preguntas","action"=>"crear"),array("class"=>"btn btn-inverse","update"=>"exec_js","before"=>"inicia_ajax()","complete"=>"fin_ajax()","with"=>"$(this).parents('form:first').serialize()","escape"=>false)) ?>
        <?php echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    	
    </div>
</div>

<div class="modal-body">
	
		<div class="well titulo-opciones">Pregunta</div>
		<div class="row-fluid">
			<div class="span9"><?php echo $this->Form->input("nombre",array("type"=>"text","label"=>"Nombre")) ?></div>
			<div class="span3"><?php echo $this->Form->input("tipo_id",array("type"=>"select","options"=>$tipos,"label"=>"Tipo de pregunta")) ?></div>
		</div>
		
		
		
	
</div>
<?php echo $this->Form->end(); ?>

<?php echo $this->Js->writeBuffer() ?>
<script type="text/javascript">

	var codigoOpciones = "<?php echo trim(str_replace("\"","'",preg_replace('/\s+/', ' ', $this->element("preguntas/opciones"))));  ?>";
	var templateOpciones = "<?php echo trim(str_replace("\"","'",preg_replace('/\s+/', ' ', $this->element("preguntas/opcionesTemplate")))); ?>";
	
	var contOpciones = 0;
	$("#crearPregunta").on("click",".borrar-opcion",function(){
				$(this).parents(".row-fluid:first").remove();
	});

	$("#crearPregunta").on("click",".boton-agregar",function(){
				++contOpciones;
				var data = {n:contOpciones};
				template = Hogan.compile(templateOpciones);
				procesado = template.render(data);
				$(".contenedor-opciones").children(".titulo-opciones").after(procesado);			
	
	});

	
	
	$("#PreguntaTipoId").change(function(){
			val = $(this).val();
			switch(val){
			   case "4":
			   case "5":
				   $(this).parents(".row-fluid:first").after(codigoOpciones);
			}
		});
</script>