<?php

session_start();
include('includes/conection.php');

if(isset($_POST['btn_guardar'] )){
    $per_dni=$_POST['per_dni'];
    $per_nom=$_POST['per_nom'];
    $per_ape=$_POST['per_ape'];
    $per_tel=$_POST['per_tel'];
    $per_car=$_POST['per_car'];
    $per_usu=$_POST['per_usu'];
    $per_cla=$_POST['per_cla'];
    $per_org=$_POST['per_org'];

    $qper=mysqli_query($cn,"SELECT*FROM pers_administrativo WHERE Usuario='$per_usu'");
    $res=mysqli_num_rows($qper);

    if($res>0){
        echo "YA EXISTE EL USUARIO";
    }else{
        $q_i_per="INSERT INTO `pers_administrativo`( `DNI`, `Nombres`, `Apellidos`, `Telefono`, `IDcargo`, `Usuario`, `Clave`, `Codigo`) VALUES ('$per_dni','$per_nom','$per_ape','$per_tel','$per_car','$per_usu','$per_cla','$per_org')";
        $query_insert=mysqli_query($cn,$q_i_per);
        
        if($query_insert){
            echo "CREADO CORRECTAMENTE";
        }else{
            echo "ERROR AL CREAR EL USUARIO";
        }

    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Personal administrativo</title>
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
                <li role="presentation"><a href="student.php">Estudiantes</a></li>
                <li role="presentation" class="active"><a href="personal.php">Personal administrativo</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevo personal administrativo. Para registrar el personal administrativo debes de llenar todos los campos del siguiente formulario.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo personal ad.</li>
                      <li><a href="listpersonal.php">Listado de personal ad.</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar nuevo personal administrativo</div>
                <form autocomplete="off" method="post" action="">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de DUI del personal administrativo" pattern="[0-9-]{1,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente números y guiones, 10 dígitos" name="per_dni">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número de DNI</label>
                            </div>
                            <div class="group-material">
                                <span>Organizacion</span>
                                <?php

                                    $query_resp3=mysqli_query($cn,"SELECT*FROM organizacion");
                                    $result_resp3=mysqli_num_rows($query_resp3);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la organizacion" name="per_org">
                                
                                <?php

                                    if($result_resp3>0){

                                        while($resp3=mysqli_fetch_array($query_resp3)){
                                ?>        
                                        <option value="<?php echo $resp3['Codigo'] ?>"> <?php echo $resp3['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>                            
                            
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del personal administrativo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del personal administrativo, solamente letras" name="per_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del personal administrativo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del personal administrativo, solamente letras" name="per_ape">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del personal administrativo" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="per_tel">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="group-material">
                                <span>Cargo</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM cargo");
                                    $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el cargo" name="per_car">
                                
                                <?php

                                    if($result_resp>0){

                                        while($resp=mysqli_fetch_array($query_resp)){
                                ?>        
                                        <option value="<?php echo $resp['IDcargo'] ?>"> <?php echo $resp['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión" name="per_usu">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de usuario</label>
                           </div>
                            
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña" name="per_cla">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
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