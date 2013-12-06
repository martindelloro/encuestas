<div class="modal-header header-ficha azul">
    <div class="botonera-header">
        <?php echo $this->Html->link("<i class='icon-white icon-file'></i>",array("controller"=>"usuarios","action"=>"pdf",$usuario["Usuario"]["id_usuario"],"pdf"),array("target"=>"_blank","escape"=>false,"class"=>"btn btn-inverse")) ?>
        <?php echo $this->Html->link("<i class='icon-white icon-print'></i>",array("controller"=>"usuarios","action"=>"ver",$usuario["Usuario"]["id_usuario"],"imprimir"),array("target"=>"_blank","class"=>"btn btn-inverse","escape"=>false)); ?>
        <?php echo $this->Html->link("<i class='icon-white icon-globe'></i>","#",array("target"=>"_blank","class"=>"btn btn-inverse","escape"=>false)); ?>
        &nbsp;
        <?php 
        if($es_ajax) echo $this->Html->link("<i class='icon-white icon-remove-sign'></i>","#",array("class"=>"btn btn-inverse","data-dismiss"=>"modal","escape"=>false)) ?>
    </div>
</div>
<ul class="nav nav-pills borde-abajo barra-nav" style="clear:both">
    <li class="active"><?php echo $this->Html->link("Informacion Usuario","#usuario_info",array("data-toggle"=>"tab")) ?></li>
	<li><?php echo $this->Html->link("Sistemas","#sistemas_info",array("data-toggle"=>"tab")) ?></li>
	<li><?php echo $this->Html->link("Grupos","#grupos_info",array("data-toggle"=>"tab")) ?></li>
	<li><?php echo $this->Html->link("Parametros","#parametros_info",array("data-toggle"=>"tab")) ?></li>
</ul>


<div class="modal-body">
    <div class="tabbable">
        <div class="tab-content">
           <?php echo $this->element("usuarios/usuario_info") ?>
           <?php echo $this->element("usuarios/sistemas_info") ?>
           <?php echo $this->element("usuarios/grupos_info") ?>
           <?php echo $this->element("usuarios/parametros_info") ?>
       </div>
    </div>
</div>