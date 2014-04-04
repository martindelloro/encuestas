<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

<meta name="author" content="">
<?php $title_for_layout = "Sistema de Seguimiento de Graduados de la Universidad Lanus"; ?>
<title><?php echo $title_for_layout?></title>

<script type="text/javascript">var Hogan = {};</script>
<?php

echo $html->css('estilo');
echo $html->css('bootstrap-combined.no-icons.min');
echo $html->css('bootstrap-responsive');
echo $html->css('font-awesome');
echo $html->css('bootstrap-modal');
echo $html->css('bootstrap-modal-bs3patch');


echo $scripts_for_layout;

echo $javascript->link("jquery");
echo $javascript->link("controles");
echo $javascript->link("bootstrap.min");
echo $javascript->link("hogan");
echo $javascript->link("bootstrap-modal");
echo $javascript->link("bootstrap-modalmanager");
echo $javascript->link("typeahead");
echo $javascript->link("bootstrap-tooltip");
echo $javascript->link("jquery.blockUI");

?>
<link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

</head>
<body>
    
    <?php echo $this->element("mensaje_sistema"); ?>
    
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
                     <?php
                      unset($OUsuario);
                      $OUsuario=$this->Session->read('Usuario');
                      
                      // debug($OUsuario);
                      
                      if (!$OUsuario){
                          echo $this->element("../usuarios/login");
                      }else{    
                        switch ($OUsuario['rol']){
                            case "admin" :
                                //echo "entro acá";
                                echo $this->element("grupos/menu_grupo");
                                echo $this->element("usuarios/menu_usuario");
                                echo $this->element("encuestas/encuesta");
                                echo $this->element("reportes/reportes");
                                echo $this->element("../usuarios/login");
                                break;
                            case "direccion" :
                                echo $this->element("reportes/reportes");
                                echo $this->element("../usuarios/login");
                                break;
                            case "graduado":
                                echo $this->element("usuarios/datos_usuario");
                                echo $this->element("../usuarios/login");
                                break;
                        }
                      
                      }
                      
                        
                     ?>
                    <?php /* echo $this->element("usuarios/menu_usuario") ?>
                    <?php echo $this->element("usuarios/datos_usuario") ?>
                    <?php echo $this->element("encuestas/encuesta") ?>
                    <?php echo $this->element("reportes/reportes") ?>
                    <?php echo $this->element("../usuarios/login") */ ?>
                        
                </div> <!-- FIN DIV NAV-COLLAPSE -->
                </div> <!-- FIN DIV CONTAINER -->
            </div> <!--  FIN DIV NAVBAR-INNER -->
        </div> <!-- FIN DIV NAVBAR -->
    
      
    <div class="container">
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8" id="contenedor-paginador">
               <?php echo $content_for_layout ?>
                   <?php
                           /* if(isset($OUsuario)){
                                debug($OUsuario);
                            }else{
                               debug($this->data);
                            }*/
                        //debug($this->data);
                        ?>
            </div> <!-- FIN DIV CONTENEDOR-PAGINADOR -->
            <div class="span2"><br/> </div>
        </div> <!-- FIN DIV ROW-FLUID -->
    </div> <!-- FIN DIV CONTAINER -->
        

    <div id="exec_js" style="display:none">

    </div> <!-- FIN EXEC_JS -->

</body>
</html>
