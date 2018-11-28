<?php

session_start();
include('includes/conection.php');

if(isset($_POST['btn_guardar'] )){
    
    $nom=$_POST['prov_nom'];
    $ruc=$_POST['prov_ruc'];
    $corr=$_POST['prov_correo'];
    $dire=$_POST['prov_dire'];
    $tel=$_POST['prov_tel'];
    $res=$_POST['prov_res'];
    
    
    $q1=mysqli_query($cn,"SELECT*FROM proveedor WHERE RUC='$ruc'");
    $resul=mysqli_num_rows($q1);
    if($resul>0){
        echo "EL PROV YA EXISTE";
    }else{
        $q_i_pro="INSERT INTO proveedor (Nombre,Correo,Direccion,Telefono,IDper_aten) VALUES('$nom','$corr','$dire','$tel','$res')";
        $result=mysqli_query($cn,$q_i_pro); 
        if($result){
            echo "CREADO CORRECTAMENTE";
        }else{
            echo "ERROR AL CREAR";
        }
        
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Proveedores</title>
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
              <li role="presentation" class="active"><a href="provider.php">Proveedores</a></li>
              <li role="presentation"><a href="category.php">Categorías</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user04.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar un nuevo proveedor, debes de llenar todos los campos del siguiente formulario para poder registrar un proveedor
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo proveedor</li>
                      <li><a href="listprovider.php">Listado de proveedores</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar un nuevo proveedor</div> 
                <form autocomplete="off" method="post" action="">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="RUC de proveedor" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo números, mínimo 8 dígitos" name="prov_ruc">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>RUC</label>
                            </div>
                            
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de proveedor" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del proveedor" name="prov_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del proveedor</label>
                            </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="Email de proveedor" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del proveedor" name="prov_correo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Dirección de proveedor" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del proveedor" name="prov_dire">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Dirección</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Teléfono de proveedor" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo números, mínimo 8 dígitos" name="prov_tel">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="group-material">
                                <span>Responsable de atencion</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM pers_atencion");
                                    mysqli_close($cn); $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad" name="prov_res">
                                
                                <?php

                                    if($result_resp>0){

                                        while($resp=mysqli_fetch_array($query_resp)){
                                ?>        
                                        <option value="<?php echo $resp['IDper_aten'] ?>"> <?php echo $resp['Nombres'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
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