<?php
include('includes/conection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estudiantes</title>
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
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Usuarios</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="admin.php">Administradores</a></li>
                <li role="presentation"><a href="teacher.php">Docentes</a></li>
                <li role="presentation" class="active"><a href="student.php">Estudiantes</a></li>
                <li role="presentation"><a href="personal.php">Personal administrativo</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución, podrás buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos del estudiante.<br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="student.php">Nuevo estudiante</a></li>
                        <li class="active">Listado de estudiantes</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin: 0 0 50px 0;">
            <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar estudiante" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Secciones</h2>
            <ul class="list-unstyled text-center list-catalog-container">
                <li class="list-catalog">Sección</li>
                <li class="list-catalog">Sección</li>
                <li class="list-catalog">Sección</li>
                <li class="list-catalog">Sección</li>
            </ul>
        </div>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">listado de estudiantes</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 18%;">Encargado</div>
                        <div class="div-table-cell" style="width: 18%;">Apellidos</div>
                        <div class="div-table-cell" style="width: 18%;">Nombres</div>
                        <div class="div-table-cell" style="width: 18%;">Sección</div>
                        <div class="div-table-cell" style="width: 9%;">Actualizar</div>
                        <div class="div-table-cell" style="width: 9%;">Eliminar</div>
                    </div>
                </div>
            </div>
                <?php
                //QUERY PAGINACION
                $q3=mysqli_query($cn,"SELECT count(*) AS t_docente FROM estudiante");
                $r3=mysqli_fetch_array($q3);
                                
                $tot_reg=$r3['t_docente'];
                $por_pag=15;
                
                if(empty($_GET['pagina'])){
                    $pagina=1;
                }else{
                    $pagina=$_GET['pagina'];
                }
                
                $desde=($pagina-1)*$por_pag;
                $tot_reg=ceil($tot_reg/$por_pag);
                
                //QUERY TABLA
                $qes=mysqli_query($cn,"SELECT IDestudiante AS id, e.Nombres as enc, e.Nombres as nom, e.Apellidos as ape, s.Descripcion as sec FROM estudiante e INNER JOIN seccion s ON s.IDseccion=e.IDseccion INNER JOIN encargado ec ON ec.IDencargado=e.IDencargado LIMIT $desde,$por_pag ");
                $res=mysqli_num_rows($qes);
                if($res>0){
                    while($des=mysqli_fetch_array($qes)){
                ?>  
            
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">
                            <div class="div-table-cell" style="width: 6%;"><?php echo $des['id']; ?></div>
                            <div class="div-table-cell" style="width: 18%;"><?php echo $des['enc']; ?></div>
                            <div class="div-table-cell" style="width: 18%;"><?php echo $des['ape']; ?></div>
                            <div class="div-table-cell" style="width: 18%;"><?php echo $des['nom']; ?></div>
                            <div class="div-table-cell" style="width: 18%;"><?php echo $des['sec']; ?></div>
                            <div class="div-table-cell" style="width: 9%;">
                                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                            </div>
                            <div class="div-table-cell" style="width: 9%;">
                                <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                
                    }
                }
                
                ?>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
               <?php

               if($pagina != 1){  

               ?>
                <li class="page-item">
                  <a class="page-link" href="?pagina= <?php echo 1; ?> " tabindex="-1">Previous</a>
                </li>
                <?php
                }

                  for($i = 1;$i <= $tot_reg; $i++){
                      if($i==$pagina){
                          echo'<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
                      }else{
                          echo'<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';              
                      }
                  }
                  if($pagina != $tot_reg){
                ?>
                <li class="page-item">
                  <a class="page-link" href="?pagina= <?php echo $tot_reg; ?>">Next</a>
                </li>
                <?php

                }

                ?>
              </ul>
            </nav>        
            
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