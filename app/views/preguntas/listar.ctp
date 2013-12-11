<?php
?>

<div class="modal-header header-ficha azul">
    <div class="botonera-header">
        <?php echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    </div>
</div>

<ul class="nav nav-pills borde-abajo barra-nav" style="clear:both">
    <li class="active"><?php echo $this->Html->link("Preguntas","#preguntas",array("data-toggle"=>"tab")) ?></li>
	<li><?php echo $this->Html->link("Agregar Pregunta","#agregarPregunta",array("data-toggle"=>"tab")) ?></li>
	
</ul>

<div class="modal-body">
	 <div class="tabbable">
	    <div class="tab-content">
    			<?php echo $this->element("preguntas/buscar") ?>
				<?php //echo $this->element("usuarios/grupo_form") ?>
		</div>
     </div>
</div>