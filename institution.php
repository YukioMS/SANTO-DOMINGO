<?php
$query_insert="";
session_start();
if(!empty($_SESSION['activo'])){
    
    include('includes/conection.php');
    
    if(isset($_POST['btn_guardar'] )){

            $nom=$_POST['nom_inst'];
            $dis=$_POST['dist_inst'];
            $tel=$_POST['tel_inst'];
            $yea=$_POST['year_inst'];

        $q1=mysqli_query($cn,"SELECT*FROM organizacion WHERE Descripcion='$nom'");
        $resul=mysqli_num_rows($q1);
        if($resul>0){
            echo "LA INST YA EXISTE";
        }else{
            $q_i_org="INSERT INTO organizacion (Descripcion,Distrito,Telefono,Year) VALUES('$nom','$dis','$tel','$yea')";
            $query_insert=mysqli_query($cn,$q_i_org);

            if($query_insert){
                echo "CREADO CORRECTAMENTE";
            }else{
                echo "ERROR AL CREAR";
            }
        }
    }

}else{
    header('location: index.php');
}

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Institución</title>
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
              <li role="presentation" class="active"><a href="institution.php">Institución</a></li>
              <li role="presentation"><a href="provider.php">Proveedores</a></li>
              <li role="presentation"><a href="category.php">Categorías</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Guarda los datos de tu institución, una vez almacenados los datos no podrás hacer más registros.
                    Puedes actualizar la información actual, o eliminar el registro completamente y añadir uno nuevo, siempre
                    y cuando no hayas registrado libros.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Guardar datos de la institución</div>
                <form method="post">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la institución" name="nom_inst">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de la institución</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Distrito de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ-^'\x22]{1,50}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres" name="dist_inst">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Distrito</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Teléfono de la institución" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo 8 números" name="tel_inst">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Año lectivo" required="" pattern="[0-9]{1,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 4 caracteres" name="year_inst">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año</label>
                            </div>
                            <p class="text-center">
                            
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary" name="btn_guardar"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>

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