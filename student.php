<?php

session_start();
include('includes/conection.php');

if(isset($_POST['btn_guardar'] )){
    
    $stu_nom=$_POST['stu_nom'];
    $stu_ape=$_POST['stu_ape'];
    $stu_sec=$_POST['stu_sec'];    
    $stu_usu=$_POST['stu_usu'];    
    $stu_cla=$_POST['stu_cla'];    
    $stu_org=$_POST['stu_org'];    
    $apo_par=$_POST['apo_par'];   
    $apo_dni=$_POST['apo_dni'];
    $apo_nom=$_POST['apo_nom'];
    
    $qad=mysqli_query($cn,"SELECT*FROM estudiante WHERE Usuario='$stu_usu'");
    $res=mysqli_num_rows($qad);

    if($res>0){
        echo "YA EXISTE EL USUARIO";
    }else{
        
        $q_enc="INSERT INTO `encargado`(`IDparentesco`, `DNI`, `Nombres`) VALUES ('$apo_par','$apo_dni','$apo_nom')";
        
        $q_i_enc=mysqli_query($cn,$q_enc);
        
        if($q_i_enc){
            echo  "ENCARGADO CREADO CORRECTAMENTE";
            
                $q=mysqli_query($cn,"SELECT * FROM encargado");
                $qr=mysqli_num_rows($q);
                
                $stu_enc= $qr;

                $q_i_est="INSERT INTO `estudiante`(`Nombres`, `Apellidos`, `IDseccion`, `IDencargado`, `Usuario`, `Clave`, `Codigo`) VALUES ('$stu_nom','$stu_ape','$stu_sec','$stu_enc','$stu_usu','$stu_cla','$stu_org')";
                $query_insert=mysqli_query($cn,$q_i_est);

                if($query_insert){
                    echo "ESTUDIANTE CREADO CORRECTAMENTE ";
                }else{
                    echo "ERROR AL CREAR EL ESTUDIANTE";
                } 


        }else{
            echo "ERROR AL CREAR EL ENCARGADO";
        }

    }
    
    
}

    
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
                    Bienvenido a la sección para registrar nuevos estudiantes, para poder registrar un estudiante deberás de llenar todos los campos del siguiente formulario
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo estudiante</li>
                      <li><a href="liststudent.php">Listado de estudiantes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo estudiante</div>
                <form autocomplete="off" method="post">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                           <legend>Datos del estudiante</legend>
                           <br><br>
                            <div class="group-material">
                                <span>Organizacion</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM organizacion");
                                    $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la Institucion" name="stu_org">
                                
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
                           
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del alumno" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombres del estudiante" name="stu_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del alumno" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellidos del estudiante" name="stu_ape">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            <div class="group-material">
                                <span>Sección</span>
                                <?php

                                    $query_resp2=mysqli_query($cn,"SELECT s.IDseccion AS codigo, s.Descripcion AS seccion, y.Descripcion AS year FROM seccion s INNER JOIN year_electivo y ON y.IDyear=s.IDyear");
                                    $result_resp2=mysqli_num_rows($query_resp2);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección" name="stu_sec">
                                
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
                                <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión" name="stu_usu">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de usuario</label>
                           </div>
                            
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña" name="stu_cla">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                            
                            <legend>Datos del encargado</legend>
                            <br><br>
                            <div class="group-material">
                                <span>Parentesco</span>
                                <?php

                                    $query_resp2=mysqli_query($cn,"SELECT*FROM parentesco");
                                    $result_resp2=mysqli_num_rows($query_resp2);

                                ?>
                                
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección" name="apo_par">
                                
                                <?php

                                    if($result_resp2>0){

                                        while($resp2=mysqli_fetch_array($query_resp2)){
                                ?>        
                                        <option value="<?php echo $resp2['IDparentesco'] ?>"> <?php echo $resp2['Descripcion']?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                
                                </select>
                            </div>

                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general check-representative" placeholder="Escribe aquí el número de DUI del encargado" pattern="[0-9-]{1,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente números y guiones, 10 dígitos" name="apo_dni">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número de DNI del encargado</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre del encargado" required="" pattern="[a-zA-ZéíóúáñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombre del encargado del estudiante" name="apo_nom">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre completo del encargado</label>
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