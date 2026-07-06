<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$nombre = $_POST['nombre'];
$ape = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$activo = true;
$tipo = $_POST['tipo'];
if(filesize($im)>0){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $stmt = "UPDATE usuario SET nombre='$nombre', ape='$ape', correo='$correo', celular='$celular', usuario='$usuario', tipo='$tipo', activo='$activo', foto='$imgContenido', tipo_foto='$revisar[mime]' WHERE id_usuario='$id'";
    }else{
        echo "<script> alert('Imagen no válida');</script>";
    }}else{    $stmt = "UPDATE usuario SET nombre='$nombre', ape='$ape', correo='$correo', celular='$celular', usuario='$usuario', tipo='$tipo', activo='$activo'";}

    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
   
        $connection -> close();
        echo "<script> window.history.go(-1); </script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
}
else{
   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}  
?>