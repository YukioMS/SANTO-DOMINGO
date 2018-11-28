<?php
session_start();
include('includes/conection.php');


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Secciones</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
   <?php
   
   include('includes/menu.php');
   
   ?>
    <div class="content-page-container full-reset custom-scroll-containers">
   <?php
   
   include('includes/nav.php');
   
   ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Institución</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="institution.php">Institución</a></li>
              <li role="presentation"><a href="provider.php">Proveedores</a></li>
              <li role="presentation"><a href="category.php">Categorías</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/section.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevas secciones al sistema, debes de seleccionar los datos en el siguiente formulario para registrar una sección
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nueva sección</li>
                      <li><a href="listsection.php">Listado de secciones</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar una nueva sección</div>
                <form>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <span>Año</span>
                                <?php

                                    $query_resp1=mysqli_query($cn,"SELECT*FROM year_electivo");
                                    $result_resp1=mysqli_num_rows($query_resp1);

                                ?>
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el año">
                                <?php

                                    if($result_resp1>0){

                                        while($resp1=mysqli_fetch_array($query_resp1)){
                                ?>        
                                        <option value="<?php echo $resp1['IDyear'] ?>"> <?php echo $resp1['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Especialidad</span>
                                <?php

                                    $query_resp2=mysqli_query($cn,"SELECT*FROM especialidad");$result_resp2=mysqli_num_rows($query_resp2);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad">
                                <?php

                                    if($result_resp2>0){

                                        while($resp2=mysqli_fetch_array($query_resp2)){
                                ?>        
                                        <option value="<?php echo $resp2['IDespecialidad'] ?>"> <?php echo $resp2['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Sección</span>
                                <?php

                                    $query_resp3=mysqli_query($cn,"SELECT DISTINCT Descripcion FROM seccion");$result_resp3=mysqli_num_rows($query_resp3);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección">
                                <?php

                                    if($result_resp3>0){

                                        while($resp3=mysqli_fetch_array($query_resp3)){
                                ?>        
                                        <option value="<?php echo $resp1['IDseccion'] ?>"> <?php echo $resp3['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <?php
        
        include('includes/footer.php');
        
        ?>
    </div>
</body>
</html>