<?php
/* $OUsuario = null;
echo $this->Mensajes->mostrar();
try{
$OUsuario = Login::getOUsuario();}
catch(LoginException $e){
        $OUsuario == null;
} */
?>

<div id="login_usuario">
<ul class="nav pull-right">
    <li class="dropdown">
      <?php // if(!$OUsuario): ?>
        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> Ingresar<strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                <?php echo $this->Form->create("User"); ?>
                <?php echo $this->Form->input("usuario",array("type"=>"text","placeholder"=>"Usuario...","label"=>false)); ?>
                <?php echo $this->Form->input("password",array("type"=>"password","label"=>false,"placeholder"=>"Password...")) ?>
                <?php echo $this->Ajax->submit("Ingresar",array("url"=>array("controller"=>"usuarios","action"=>"login"),"class"=>"btn","div"=>false,"update"=>"login_usuario","complete"=>"fin_ajax()","before"=>"inicia_ajax();")); ?>
                <?php echo $this->Form->end(); ?>
            </div>
       <?php /* else: ?>
         <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i>
             <?php echo $OUsuario->getNombre()." ".$OUsuario->getApellido();  ?><strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                <?php echo $this->Html->link("Salir",array("controller"=>"users","action"=>"logout"),array("class"=>"btn btn-info")); ?>
            </div>

       <?php endif; */?>
</li>
</ul>
</div>
<?php echo $this->Js->writeBuffer(); ?>
<?php if(isset($redirect)): ?>
<script type="text/javascript">
        self.location = self.location;
</script>
                                                                                                                              1,1      Comienzo


<?php endif; ?>
