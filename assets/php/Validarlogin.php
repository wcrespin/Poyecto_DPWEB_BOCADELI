<?php
session_start();
include '../../ConexionBD/conexion.php';
$user=$_REQUEST['usr'];
$pass=($_REQUEST['pwds']);
$login= $_GET['Login'];
$registro=$_GET['registrarse'];
echo $login;
$query_login="SELECT * FROM usuarios WHERE email='$user' AND password='$pass'";

$ejecQuery=mysqli_query($conex,$query_login);


if(mysqli_num_rows($ejecQuery)==0)
{
    header('location:../html/Index.html');
}
else{   
    echo "\nError al buscar usuario".mysqli_error($conectar);
}    

?>