<?php

session_start();
include('includes/conection.php');

if(isset($_POST['btn_guardar'] )){
    $nom=$_POST['doc_nom'];
    $ape=$_POST['doc_ape'];
    $tel=$_POST['doc_tel'];
    $esp=$_POST['doc_esp'];
    $tur=$_POST['doc_tur'];
    $usu=$_POST['doc_usu'];
    $cla=$_POST['doc_cla'];
    $sec=$_POST['doc_sec'];
    $org=$_POST['doc_org'];
    
    $qad=mysqli_query($cn,"SELECT*FROM docente WHERE Usuario='$usu'");
    $res=mysqli_num_rows($qad);

    if($res>0){
        echo "YA EXISTE EL USUARIO";
    }else{
        $q_i_doc="INSERT INTO `docente`(`Nombres`, `Apellidos`, `Telefono`, `IDespecialidad`, `IDseccion`, `IDturno`, `Usuario`, `Clave`, `Codigo`) VALUES ('$nom','$ape','$tel','$esp','$sec','$tur','$usu','$cla','$org')";
        $query_insert=mysqli_query($cn,$q_i_doc);
        
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
    <title>Docentes</title>
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
                <li role="presentation"  class="active"><a href="teacher.php">Docentes</a></li>
                <li role="presentation"><a href="student.php">Estudiantes</a></li>
                <li role="presentation"><a href="personal.php">Personal administrativo</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos docentes. Para registrar un docente debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de docentes registrados
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo docente</li>
                      <li><a href="listteacher.php">Listado de docentes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo docente</div>
                <form autocomplete="off" method="post" action="">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del docente" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del docente, solamente letras" name="doc_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del docente" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del docente, solamente letras" name="doc_ape">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del docente" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="doc_tel">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el usuario del docente" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el usuario" name="doc_usu">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuario</label>
                            </div>
                            
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Escribe aquí la clave de usuario" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Todos los caracteres" name="doc_cla">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Clave</label>
                            </div>
                            
                            <div class="group-material">
                                <span>Especialidad</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM especialidad");
                                    $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad" name="doc_esp">
                                
                                <?php

                                    if($result_resp>0){

                                        while($resp=mysqli_fetch_array($query_resp)){
                                ?>        
                                        <option value="<?php echo $resp['IDespecialidad'] ?>"> <?php echo $resp['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>
                           <legend>Turno y Sección encargada</legend>
                            <div class="group-material">
                                <span>Turno</span>
                                <?php

                                    $query_resp1=mysqli_query($cn,"SELECT*FROM turno");
                                    $result_resp1=mysqli_num_rows($query_resp1);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el turno" name="doc_tur">
                                
                                <?php

                                    if($result_resp1>0){

                                        while($resp1=mysqli_fetch_array($query_resp1)){
                                ?>        
                                        <option value="<?php echo $resp1['IDturno'] ?>"> <?php echo $resp1['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>
                            
                            <div class="group-material">
                                <span>Sección</span>
                                <?php

                                    $query_resp2=mysqli_query($cn,"SELECT s.IDseccion AS codigo, s.Descripcion AS seccion, y.Descripcion AS year FROM seccion s INNER JOIN year_electivo y ON y.IDyear=s.IDyear");
                                    $result_resp2=mysqli_num_rows($query_resp2);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección" name="doc_sec">
                                
                                <?php

                                    if($result_resp2>0){

                                        while($resp2=mysqli_fetch_array($query_resp2)){
                                ?>        
                                        <option value="<?php echo $resp2['codigo'] ?>"> <?php echo 'Seccion '.$resp2['seccion'].' '.$resp2['year'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Organizacion</span>
                                <?php

                                    $query_resp3=mysqli_query($cn,"SELECT*FROM organizacion");
                                    mysqli_close($cn); $result_resp3=mysqli_num_rows($query_resp3);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad" name="doc_org">
                                
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