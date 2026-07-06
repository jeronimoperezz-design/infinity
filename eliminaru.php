<?php 
session_start();
if ( $_SESSION['tipo']==1){
$usuarios = $_POST['usuario'];
    include 'conexi.php';
    $consulta2 = "DELETE FROM usuarios WHERE id_usu = $usuario";
    $result2 = mysqli_query($connection,$consulta2);
    echo "<script> window.history.go(-1);</script>";
}
else{
   echo "<script> window.location.href='index.php';</script>";
} 
?>