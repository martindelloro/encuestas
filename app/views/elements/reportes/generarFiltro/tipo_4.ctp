<?php $this->Form->create("Reporte") ?>
<?php echo $this->Form->input("SubReporte.0.Filtro.0.FiltrosOpciones",array("type"=>"select","multiple"=>"checkbox","options"=>$opciones,"label"=>false));  ?>
<?php $this->Form->end(); ?>