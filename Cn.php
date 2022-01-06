<?php

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$conexion = mysqli_connect("localhost", "root", "", "bdusuarios");

$consulta = "SELECT * FROM datosusuarios WHERE Nombre='$usuario' and Pass='$clave'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

$RAMSES='ramses';    
$ADMIN='admin';
$YO='cristiang';

if ($filas >0){
    if ((isset($_POST['user'])) || (isset($_POST['password'])) || isset($_POST['submit'])){
    
        if($usuario == $YO || $usuario == $RAMSES || $usuario == $ADMIN){
            
            $_SESSION['username'] = $usuario;
            header('Location:UserLider.php');   
        }else {
            $_SESSION['username'] = $usuario;
            header('Location:User.php');
        }
    }
}else {
    header('Location:Index.php');
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>