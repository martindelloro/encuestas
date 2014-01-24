<div id="encuesta" class="tab-pane active">
<?php $anios = array("2010"=>"2010","2011"=>"2011","2012"=>"2012","2013"=>"2013","2014"=>"2014","2015"=>"2015","2016"=>"2016") ?>
<div class="well titulo-general">
	<span>Datos Encuesta</span>
</div>
<div class="row-fluid">
	<div class="span10">
		<div class="label label-general">Nombre de la encuesta:</div>
		<?php echo $this->Form->input("nombre",array("type"=>"text","label"=>false,"class"=>"span7 input-100")); ?>
	</div>
	<div class="span2">
		<div class="label label-general">Año Encuesta</div>
		<?php echo $this->Form->input("anio",array("type"=>"select","options"=>$anios,"label"=>false,"empty"=>true)) ?>
	</div>
</div>


<div class="well titulo-general">
	<span>Preguntas</span>
	<?php echo $this->Ajax->link("<i class='icon-plus'> Agregar Pregunta</i>",array("controller"=>"preguntas","action"=>"crear"),array("class"=>"btn btn-inverse btn-mini","before"=>"modales('crearPregunta','modal-ficha')","complete"=>"fin_ajax('crearPregunta')","update"=>"crearPregunta","escape"=>false)); ?>
	<?php echo $this->Form->input("id",array("type"=>"hidden")) ?>
	<input id="EncuestaPreguntas" type="hidden" name="data[Preguntas]" value="" />
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
<div class="contenedor-preguntas"></div>
</div>	

<script type="text/javascript">
	var contPreguntas = 1;
	$(".contenedor-preguntas").on("click",".icon-arrow-up",function(){
          var preguntaCambiar = $(this).parents('.pregunta');
		  var moverPregunta = $(preguntaCambiar).prev('.pregunta');
		  if(moverPregunta != null){
			pos = $(moverPregunta).find('.orden').val();
			$(preguntaCambiar).find('.orden').val(pos);
			$(moverPregunta).before(preguntaCambiar);
			$(moverPregunta).find('.orden').val(++pos); 		
		  }	
    });

	$(".contenedor-preguntas").on("click",".icon-arrow-down",function(){
       	  var preguntaCambiar = $(this).parents('.pregunta');
		  var moverPregunta = $(preguntaCambiar).next('.pregunta');
		  if(moverPregunta != null){
			pos = $(moverPregunta).find('.orden').val();
			alert(pos);
			$(preguntaCambiar).find('.orden').val(pos);
			$(moverPregunta).after(preguntaCambiar);
			$(moverPregunta).find('.orden').val(--pos); 		
		  }	
  });

</script>


<?php echo $this->Js->writeBuffer(); ?>