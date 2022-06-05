<?php
require('Datos.inc');
$conectar=mysqli_connect($host,$user,$pass,$base); 
if(!$conectar){
    die("Problemas al conectar".mysqli_connect_error());
}
?>