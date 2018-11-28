<?php
$query="";
$result="";
$data="";

session_start();
if(!empty($_SESSION['activo'])){
    header('location: home.php');
}else{     
    if(!empty($_POST)){

        include('includes/conection.php');
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $t_usuario=$_POST['tp_us'];


        $query=mysqli_query($cn,"SELECT*FROM ".$t_usuario." WHERE Usuario='$usuario' AND Clave='$clave'");

        $result=mysqli_num_rows($query);

        if($result>0){
            $data=mysqli_fetch_array($query);
            $_SESSION['activo']=true;
            $_SESSION['Nombres']=$data['Apellidos'];
            $_SESSION['Usuario']=$data[0];
            $_SESSION['Tip_U']=$t_usuario;
            header('location: home.php');
            
        }else{
            session_destroy();
        }

    }

}

?>
