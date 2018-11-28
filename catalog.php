<?php

session_start();
if(!empty($_SESSION['activo'])){
    include('includes/conection.php');
    
    
}else{
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Catálogo</title>
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
              <h1 class="all-tittles">Sistema bibliotecario <small>Catálogo de libros</small></h1>
            </div>
        </div>
         <div class="container-fluid"  style="margin: 40px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/checklist.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido al catálogo, selecciona una categoría de la lista para empezar, si deseas buscar un libro por nombre o título has click en el icono &nbsp; <i class="zmdi zmdi-search"></i> &nbsp; que se encuentra en la barra superior
                </div>
            </div>
        </div>

        <div class="container-fluid">
               <?php
            
                //QUERY PAGINACION
                $q3=mysqli_query($cn,"SELECT count(*) AS total_lib FROM libro");
                $r3=mysqli_fetch_array($q3);
                                
                $tot_reg=$r3['total_lib'];
                $por_pag=10;
                
                if(empty($_GET['pagina'])){
                    $pagina=1;
                }else{
                    $pagina=$_GET['pagina'];
                }
                
                $desde=($pagina-1)*$por_pag;
                $tot_reg=ceil($tot_reg/$por_pag);
                
                
                
                //QUERY LIBROS
                $q2=mysqli_query($cn,"SELECT*FROM libro LIMIT $desde,$por_pag");
                $r2=mysqli_num_rows($q2);
                    if($r2){
                        while($d2=mysqli_fetch_array($q2)){
                ?>
                <div class="media media-hover">
                    <div class="media-left media-middle">
                        <a href="#!" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                          <img class="media-object" src="assets/img/book.png" alt="Libro" width="48" height="48">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $d2['Titulo']; ?></h4>
                        <div class="pull-left">
                            <strong><?php echo $d2['Autor']; ?><br></strong>
                            <strong><?php echo $d2['Year']; ?><br></strong>
                        </div>
                        <p class="text-center pull-right">
                            <a href="<?php echo $d2['Ruta']; ?>" class="btn btn-info btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Descargar</a>
                        </p>
                    </div>
                </div>
                <?php    
                        }  
                    }
               ?>
        </div>
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