<div id="menu_usuario">
<ul class="nav pull-left">
<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown">Encuestas<strong class="caret"></strong></a>
<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
    <?php echo $this->Ajax->link("Crear Encuestas",array("controller"=>"usuarios","action"=>"crear_usuario"),array("before"=>"modales('crear_usuario','modal-ficha')","complete"=>"fin_ajax('crear_usuario')","update"=>"crear_usuario","class"=>"btn btn-inverse")); ?><br>
    <?php echo $this->Ajax->link("Modificar Encuestas",array("controller"=>"usuarios","action"=>"modificar_usuario"),array("before"=>"modales('crear_usuario','modal-ficha')","complete"=>"fin_ajax('modificar_usuario')","update"=>"modificar_usuario","class"=>"btn btn-inverse")); ?><br>
    <?php echo $this->Ajax->link("Buscar Encuestas",array("controller"=>"usuarios","action"=>"buscar_usuario"),array("before"=>"modales('modificar_usuario','modal-ficha')","complete"=>"fin_ajax('buscar_usuario')","update"=>"buscar_usuario","class"=>"btn btn-inverse")); ?><br>
    <br>
</div>

</li>
</ul>
</div>