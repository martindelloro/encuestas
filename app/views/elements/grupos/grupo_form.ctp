<?php ?>

<div id="grupo" class="tab-pane active">
	<div class="well titulo-general">
		<span>Crear Nuevo Grupo</span>
	</div>
    <br>
	<div class="row-fluid">
		<div class="span5">
			<?php echo $this->Form->input("nombre",array("type"=>'text',"label"=>"Nombre de Grupo")); ?>
		</div>
		
	</div>
	

	<div class="row-fluid">
		<?php echo $this->Ajax->submit("Crear Grupo", array("url"=>array("controller"=>'grupos',"action"=>'crear_grupo'),"update"=>"crear_grupo", "before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>

	</div>

	<?php echo $this->Mensajes->mostrar();  ?>
</div>
<?php echo $this->Js->writeBuffer() ?>
