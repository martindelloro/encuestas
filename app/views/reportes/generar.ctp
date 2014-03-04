<div class="modal-header header-ficha azul">
    <div class="botonera-header">
         <?php echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    </div>
</div>

<ul class="nav nav-pills borde-abajo barra-nav" style="clear:both">
    <li class="active"><?php echo $this->Html->link("Generar Reporte","#reporteVariables",array("data-toggle"=>"tab")) ?></li>
	<li><?php echo $this->Html->link("Reportes Generados","#generados",array("data-toggle"=>"tab")) ?></li>
</ul>

<div class="modal-body">
   <div class="tab-content">
    	<?php echo $this->element("reportes/generarReporte") ?>
    	<?php echo $this->element("reportes/generados") ?>
   </div>
</div>

<?php echo $this->Js->writeBUffer(); ?>
