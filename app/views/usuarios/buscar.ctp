<?php $paginator->options(array("url"=>array("controller"=>"Usuarios","action"=>"buscar"),"update"=>"#listado-usuarios",
								 "before"=>"inicia_ajax()","complete"=>"fin_ajax()","evalScripts"=>true)); ?>

			
<div class="well listado-titular"><p>Listado Usuarios</p></div>
	<table class="table table-striped ">
		<tbody>
		<tr><td colspan="5" style="text-align:center">
    		<?php  echo $this->Paginator->numbers(array('before' => '<div class="pagination"><ul>','separator' => '','tag' => 'li','after' => '</ul></div>'));?>
    	</td></tr>
    	<tr><td class="resultados" colspan="5"><?php echo $this->Paginator->counter(array('format' => __('Página %page% de %pages%, mostrando %current% resultados de %count% en total.', true))); ?></td></tr>
		
			<tr class="titular-resultado">
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
			</tr>
		
		
			<?php foreach($usuarios as $usuario): ?>
				<?php $id_usuario = $usuario["Usuario"]["id_usuario"] ?>
				<tr>
					<td><?php echo $usuario["Usuario"]["usuario"] ?></td>
					<td><?php echo $usuario["UsuarioInfo"]["nombre"] ?></td>
					<td><?php echo $usuario["UsuarioInfo"]["apellido"] ?></td>
					<td><?php echo $this->Ajax->link("<i class='icon-eye-open'></i>",array("controller"=>"usuarios","action"=>"ver",$id_usuario),
																					  array("escape"=>false,"update"=>"$id_usuario","before"=>"modales('$id_usuario','modal-ficha')",
																							"complete"=>"fin_ajax('$id_usuario')")); ?><td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php echo $this->Js->writeBuffer(); ?>
				 