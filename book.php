<?php
session_start();
if(!empty($_SESSION['activo'])){
    include('includes/conection.php');

    if(isset($_POST['btn_guardar'] )){


        //creamos las variables para subir a la bd
            $cat=$_POST['lib_cat'];
            $tit=$_POST['lib_tit'];
            $aut=$_POST['lib_aut'];
            $pro=$_POST['lib_pro'];
            $yea=$_POST['lib_yea'];
            $edi=$_POST['lib_edi'];
            $edc=$_POST['lib_edc'];
            $can=$_POST['lib_can'];
            $pre=$_POST['lib_pre'];
            $est=$_POST['lib_est'];
            $car=$_POST['lib_car'];
            $ubi=$_POST['lib_ubi'];


        if($_FILES['archivo']['error']>0){
            echo "ERROR AL CARGAR ARCHIVO";
        }else{
            $permitido = array("application/pdf","image/jpg");
            $limite_kb = 500000;

            if(in_array($_FILES["archivo"]["type"],$permitido) && $_FILES["archivo"]["size"]<=$limite_kb*1024){
                $ruta='upload/';
                $archivo=$ruta.$_FILES["archivo"]["name"];

                if(!file_exists($archivo)){

                    $resultado=move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);

                    if($resultado){

                        echo "archivo Guardad";

                        $q="INSERT INTO `libro`(`IDcategoria`, `Titulo`, `Autor`, `IDproveedor`, `Year`, `Editorial`, `Edicion`, `Ejemplares`,`IDcargo`,`Precio`, `IDestado_lib`, `IDubicacion`,`Ruta`) VALUES ('$cat','$tit','$aut','$pro','$yea','$edi','$edc','$can','$car','$pre','$est','$ubi','$archivo')";
                        echo $q;
                        $query = mysqli_query($cn,$q);

                        if($query){

                            echo "LIBRO REGISTRADO CORRECTAMENTE";
                            header('location:book.php');

                        }else{

                            echo "NO SE PUDO REGISTRAR EL LIBRO";

                        }
                    }else{

                        echo "error al guardar el archivo";

                    }                    
                }else{

                    echo "Archivo ya existe";

                }
            }else{

                echo "archivo no permitido";

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
    <title>Registrar Libro</title>
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
              <h1 class="all-tittles">Sistema bibliotecario <small>Añadir libro</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevos libros a la biblioteca, deberas de llenar todos los campos para poder registrar el libro
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form autocomplete="off" method="post" action="" enctype="multipart/form-data">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo libro</div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Información básica</strong></legend><br>
                            <div class="group-material">
                                <span>Categoría</span>
                                <?php

                                    $query_resp1=mysqli_query($cn,"SELECT*FROM categorias");
                                    $result_resp1=mysqli_num_rows($query_resp1);

                                ?>                                
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la categoría del libro" name="lib_cat">
                                <?php

                                    if($result_resp1>0){

                                        while($resp1=mysqli_fetch_array($query_resp1)){
                                ?>        
                                        <option value="<?php echo $resp1['IDcategoria'] ?>"> <?php echo $resp1['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí el título o nombre del libro" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el título o nombre del libro" name="lib_tit">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Título</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí el autor del libro" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro" name="lib_aut">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Autor</label>
                            </div>
                            <legend><strong>Otros datos</strong></legend><br>
                            <div class="group-material">
                                <span>Proveedor</span>
                                <?php

                                    $query_resp=mysqli_query($cn,"SELECT*FROM proveedor");
                                    $result_resp=mysqli_num_rows($query_resp);

                                ?>
                                
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige el proveedor del libro" name="lib_pro">
                                <?php

                                    if($result_resp>0){

                                        while($resp=mysqli_fetch_array($query_resp)){
                                ?>        
                                        <option value="<?php echo $resp['IDproveedor'] ?>"> <?php echo $resp['Nombre'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                           <div class="group-material">
                               <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el año del libro" required="" pattern="[0-9]{1,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solamente números, sin espacios" name="lib_yea">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año</label>
                           </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí la editorial del libro" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Editorial del libro" name="lib_edi">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Editorial</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí la edición del libro" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Edición del libro" name="lib_edc">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Edición</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  placeholder="Escribe aquí la cantidad de libros que registraras" required=" "pattern="[0-9]{1,7}" maxlength="7" data-toggle="tooltip" data-placement="top" title="¿Cuántos libros registraras?" name="lib_can">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Ejemplares</label>
                            </div>
                            <legend><strong>Estado físico, ubicación y valor</strong></legend><br>
                            <div class="group-material">
                                <span>Ubicación</span>
                                <?php

                                    $query_resp3=mysqli_query($cn,"SELECT*FROM ubicacion_libro");
                                    $result_resp3=mysqli_num_rows($query_resp3);

                                ?>
                                
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Selecciona la ubicacion del libro" name="lib_ubi">
                                <?php

                                    if($result_resp3>0){

                                        while($resp3=mysqli_fetch_array($query_resp3)){
                                ?>        
                                        <option value="<?php echo $resp3['IDubicacion'] ?>"> <?php echo $resp3['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>                            
                               
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el precio estimado del libro" required="" pattern="[0-9.]{1,7}" maxlength="7" data-toggle="tooltip" data-placement="top" title="Sólo números y un punto si el valor posee decimales. Ejemplo: 7.79" name="lib_pre">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Estimado</label>
                            </div>
                            <div class="group-material">
                                <span>Estado</span>
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige el estado del libro" name="lib_est">
                                    <option value="" disabled="" selected="">Selecciona el estado del libro</option>
                                    <option value="1">Bueno</option>
                                    <option value="2">Deteriorado</option>
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Cargo</span>
                                <?php

                                    $query_resp4=mysqli_query($cn,"SELECT*FROM cargo");
                                    $result_resp4=mysqli_num_rows($query_resp4);

                                ?>
                                
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige el proveedor del libro" name="lib_car">
                                <?php

                                    if($result_resp4>0){

                                        while($resp4=mysqli_fetch_array($query_resp4)){
                                ?>        
                                        <option value="<?php echo $resp4['IDcargo'] ?>"> <?php echo $resp4['Descripcion'] ?> </option>

                                <?php        
                                        }
                                   }

                                ?>
                                </select>
                            </div>
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general" required="" data-toggle="tooltip" data-placement="top" title="Archivos.pdf" name="archivo" id="archivo" accept="application/pdf">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Archivo</label>
                            </div>

                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary" name="btn_guardar"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
                       </div>
                   </div>
                </div>
            </form>
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