<div id="menu_usuario">
	<ul class="nav pull-left">
		<li class="dropdown"><a class="dropdown-toggle" href="#"
			data-toggle="dropdown">Grupos<strong class="caret"></strong>
		</a>
			<div class="dropdown-menu"
				style="padding: 15px; padding-bottom: 0px;">
				<?php echo $this->Ajax->link("Crear Grupo",array("controller"=>"grupos","action"=>"crear_grupo"),array("before"=>"modales('crear_grupo','modal-ficha')","complete"=>"fin_ajax('crear_grupo')","update"=>"crear_grupo","class"=>"btn btn-inverse")); ?>
				<br>
                                <?php echo $this->Ajax->link("Buscar Grupo",array("controller"=>"grupos","action"=>"buscar_grupo"),array("before"=>"modales('buscar_grupo','modal-ficha')","complete"=>"fin_ajax('buscar_grupo')","update"=>"buscar_grupo","class"=>"btn btn-inverse")); ?>
				<br>
				<?php echo $this->Ajax->link("Agregar Usuario a Grupo",array("controller"=>"grupos","action"=>"asignar_usuario_a_grupo"),array("before"=>"modales('asignar_usuario_a_grupo','modal-ficha')","complete"=>"fin_ajax('asignar_usuario_a_grupo')","update"=>"asignar_usuario_a_grupo","class"=>"btn btn-inverse")); ?>
				<br>
				<br>
			</div></li>
	</ul>
</div>
