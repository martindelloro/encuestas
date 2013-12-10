<?php $roles=array("admin"=>"Administrador",
                   "graduado"=>"Graduado",
                    "direccion"=>"Secretarías"); 
      $provincias=array("Ciudad de Buenos Aires","Buenos Aires","Catamarca","Chaco","Chubut","Córdoba","Corrientes","Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquén","Río Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucumán");
      $departamentos=array("Seleccione una Provincia");
      $localidades=array("Seleccione un Departamento");
          
?>      
<p><b>Crear Nuevo Usuario</b></p>
<div class="row-fluid">
    <div class="span3"><?php echo $this->Form->input("usuario",array("type"=>'text',"label"=>"Nombre de Usuario")); ?></div>
    <div class="span3"><?php echo $this->Form->input("nombre",array("type"=>'text',"label"=>"Nombre")); ?></div>
    <div class="span3"><?php echo $this->Form->input("apellido",array("type"=>'text',"label"=>"Apellido")); ?></div>
    <div class="span3"><?php echo $this->Form->input("dni",array("type"=>'text',"label"=>"DNI")); ?></div>
</div>
<div class="row-fluid">
    <div class="span3"><?php echo $this->Form->input("password",array("type"=>'password',"label"=>"Password")); ?></div>
    <div class="span3"><?php echo $this->Form->input("password_rep",array("type"=>'password',"label"=>"Repetir Password")); ?></div>
    <div class="span3"><?php echo $this->Form->input("fecha_nac",array("type"=>'text',"label"=>"Fecha de Nacimiento")); ?></div>
    <div class="span3"><?php echo $this->Form->input("rol",array("type"=>'select',"options"=>$roles, "label"=>"Rol")); ?></div>
</div>

<div class="row-fluid">
    <?php echo $this->Ajax->submit("Crear Usuario", array("url"=>array("controller"=>'usuarios',"action"=>'crear_usuario'),"update"=>"crear_usuario", "before"=>"inicia_ajax()","complete"=>"fin_ajax()")); ?>
    <?php echo $this->Mensajes->mostrar();  ?>
    <?php echo $this->Js->writeBuffer() ?>
</div>
    

