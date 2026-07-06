<?php
//session_start();
//if ( $_SESSION['tipo']==1){
include 'conexi.php';

$nombre = $_POST['nombre'];
$usuarios = $_POST['usuario'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$whatsapp = $_POST['whatsapp'];
$clave = $_POST['clave'];
$tipo = $_POST['tipo'];
$query0 = "SELECT * FROM usuarios WHERE usuario='$usuarios';";
$resultado0 = mysqli_query($connection,$query0);
if(mysqli_num_rows($resultado0)>0){
    echo "<script>alert('El nombre de usuario ya existe');window.history.go(-1);</script>";
}
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
if ($clave !== $clave2){
    echo "<script>alert('Las contraseñas no coinciden');window.history.go(-1);</script>";
}       
$clave = password_hash($clave, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios( nombre, apellido, usuario, clave, correo, whatsapp, tipo)
    VALUES( '$nombre', '$apellido', '$usuarios', '$clave', '$correo', '$whatsapp', '$tipo');";
    $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
        echo "<script> window.location.href='inisesion.php';</script>";  
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
//}
//else{
//   echo "<script> window.location.href='index.php';</script>";
//}  
?>