<?php
session_start();
include('includes/conection.php');
if(!empty($_SESSION['activo'])){
    
    if(isset($_POST['btn_guardar'] )){

        $nom=$_POST['admin_nom'];
        $ape=$_POST['admin_ape'];
        $usu=$_POST['admin_usu'];
        $cor=$_POST['admin_cor'];
        $pas=$_POST['admin_cla'];
        $pa2=$_POST['admin_rcl'];
        $org=$_POST['admin_org'];

        if($pa2==$pas){

            $qad=mysqli_query($cn,"SELECT*FROM administradores WHERE Correo='$cor'");
            $res=mysqli_num_rows($qad);

            if($res>0){
                echo "YA EXISTE EL USUARIO";
            }else{

                $q="INSERT INTO administradores (Nombres,Apellidos,Usuario,Correo,Clave,Codigo) VALUES ('$nom','$ape','$usu','$cor','$pas','$org')";

                $resul=mysqli_query($cn,$q);

                if($resul){
                    echo "CREADO CORRECTAMENTE";
                }else{
                    echo "ERROR AL CREAR EL USUARIO";
                }
            }

        }else{

            echo "LAS CONTRASEÑAS NO COINCIDEN";
        }
    }

}else{
    header('location: index.php');
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administradores</title>
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
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"  class="active"><a href="admin.php">Administradores</a></li>
                <li role="presentation"><a href="teacher.php">Docentes</a></li>
                <li role="presentation"><a href="student.php">Estudiantes</a></li>
                <li role="presentation"><a href="personal.php">Personal administrativo</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos administradores del sistema, debes de llenar todos los campos del siguiente formulario para registrar un administrador
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo administrador</li>
                      <li><a href="listadmin.php">Listado de administradores</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo administrador</div>
                <form autocomplete="off" method="post">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre completo" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del administrador" name="admin_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre completo" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del administrador" name="admin_ape">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión" name="admin_usu">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de usuario</label>
                           </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="E-mail"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del administrador" name="admin_cor">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña" name="admin_cla">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                           <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Repite la contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña" name="admin_rcl">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Repetir contraseña</label>
                           </div>
                            <div class="group-material">
                                <span>Organizacion</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM organizacion");
                                    mysqli_close($cn); $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad" name="admin_org">
                                
                                <?php

                                    if($result_resp>0){

                                        while($resp=mysqli_fetch_array($query_resp)){
                                ?>        
                                        <option value="<?php echo $resp['Codigo'] ?>"> <?php echo $resp['Descripcion'] ?> </option>

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
        <?php
    
    
    include('includes/chat.php');
    ?>
</body>
</html>