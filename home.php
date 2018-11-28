<?php
session_start();
if(!empty($_SESSION['activo'])){
    include('includes/conection.php');
    
}else{
    header('location: index.html');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
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
    <link rel="stylesheet" href="chat/style.css">
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
       
       <!--BAR ADMIN-->
       <?php

       include('includes/nav.php');
       ?>

        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">administradores</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Administradores FROM administradores");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Administradores'] ;
                ?>                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles">estudiantes</div>
                <div class="tile-num full-reset">
                
                 <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Estudiantes FROM estudiante");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Estudiantes'] ;
                ?>                
               
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
                <div class="tile-name all-tittles">docentes</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Docentes FROM docente");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Docentes'] ;
                ?>                
                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">personal administrativo</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Per_ad FROM pers_administrativo");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Per_ad'] ;
                ?>                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-truck"></i></div>
                <div class="tile-name all-tittles">proveedores</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Prov FROM proveedor");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Prov'] ;
                ?>                
                
                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
                <div class="tile-name all-tittles">libros</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Libros FROM libro");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Libros'] ;
                ?>                
                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
                <div class="tile-name all-tittles">categorías</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Cat FROM categorias");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Cat'] ;
                ?> 
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
                <div class="tile-name all-tittles">secciones</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS secciones FROM seccion");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['secciones'] ;
                ?>                
                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">devoluciones pendientes</div>
                <div class="tile-num full-reset">
                <?php
                
                $q_total_est=mysqli_query($cn,"SELECT count(*) AS Pend FROM `prestamos` WHERE Estado=1");
                    $d_total_est=mysqli_fetch_array($q_total_est);
                    echo $d_total_est['Pend'] ;
                ?>                
                
                </div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
                <div class="tile-name all-tittles">préstamos</div>
                <div class="tile-num full-reset">7</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
        </section>
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