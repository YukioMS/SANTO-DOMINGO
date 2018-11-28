<?php
session_start();
if(isset($_GET)){
    $busqueda=$_GET['bookName'];
    include('includes/conection.php');
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Buscar libro</title>
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
              <h1 class="all-tittles">Sistema bibliotecario <small>Busqueda de libro</small></h1>
            </div>
           <?php
            
            $q=mysqli_query($cn,"SELECT*FROM libro WHERE Autor LIKE '%$busqueda%' OR Titulo LIKE '%$busqueda%'");
            
            $r=mysqli_num_rows($q);

            if($r>0){
                
                while($d=mysqli_fetch_array($q)){ 
           ?>

            <div class="media media-hover">
                <div class="media-left media-middle">
                    <a href="#!" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                      <img class="media-object" src="assets/img/book.png" alt="Libro" width="48" height="48">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $d['Titulo']; ?></h4>
                    <div class="pull-left">
                        <strong><?php echo $d['Autor']; ?><br></strong>
                        <strong><?php echo $d['Year']; ?><br></strong>
                    </div>
                    <p class="text-center pull-right">
                        <a href="#!" class="btn btn-info btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Descargar</a>
                    </p>
                </div>
            </div>
            <?php
                }
            }else{ 
            ?>
            <br><br><br>
            <h3 class="text-center all-tittles">resultados de la búsqueda</h3>
            <h2 class="text-center"><i class="zmdi zmdi-mood-bad zmdi-hc-5x"></i><br><br>Lo sentimos, no hemos encontrado ningún libro con el nombre <strong>ingresado</strong> en el sistema</h2>
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
                    
            }
            
            ?>

        </div>
        <?php
        
        include('includes/footer.php');
        
        ?>
    </div>
</body>
</html>