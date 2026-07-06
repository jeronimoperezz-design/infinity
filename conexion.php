
<?php
session_start();
$usu = $_POST['usuario'];
$clave = $_POST['clave'];
include 'conexi.php';
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usu'";
$result = mysqli_query($connection, $consulta);
if(!$result){
    echo "<script>alert('No se pudó ejecutar');window.location.href='inisesion.php';</script>";
exit;
}else{
    while($row=mysqli_fetch_assoc($result)){
        $id_usu= $row["id_usu"];
        $usu2= $row["usuario"];
        $NOM= $row["nombre"];
        $tipo= $row["tipo"];
         $foto= $row["foto"];
         $clave2=$row['password_hash'];
    }
    if($usu==$usu2){
        if(password_verify($clave, $clave2)){
           if($tipo==1){
            $_SESSION["id_usu"]=$id_usu;
            $_SESSION["nombre"]=$NOM;
            $_SESSION["foto"]=$foto;
            $_SESSION["tipo"]=$tipo;
            echo"<script> window.location.href='admin.php';</script>";
           }elseif($tipo==2){
            $_SESSION["id_usu"]=$id_usu;
            $_SESSION["nombre"]=$NOM;
            $_SESSION["foto"]=$foto;
            $_SESSION["tipo"]=$tipo;
            echo"<script> window.location.href='index.php';</script>";
           }
           else{
            $_SESSION["tipo"]=0;
            echo"<script> window.location.href='inisesion.php';</script>";
           }
        }
        else{
            echo"<script>alert('Contraseña incorrecta');window.location.href='inisesion.php';</script>";
        }}
    else{
        echo"<script>alert('Usuario incorrecto');window.location.href='inisesion.php';</script>";
        }
    }
$connection -> close();
?>