<?php
include '../../ConexionBD/conexion.php';
$nom=$_REQUEST["txt_name"];
$Correo=$_REQUEST["txt_correo"];
$pass=($_REQUEST["txt_pwd"]);
$insert_usuario="INSERT INTO usuarios (nouser,password, email)
VALUES ('$nom','$pass','$Correo')";
if(!mysqli_query($conectar,$insert_usuario)){
    echo "\nRegistro fallido".mysqli_error($conectar);
}
else {
    header('location:login.php');
}
mysqli_query($conectar,$insert_usuario);
mysqli_close($conectar);
?>