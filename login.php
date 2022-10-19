<?php

$conn = new mysqli ("localhost","root","","administracion");

if($conn->connect_error)
{ 
     echo "No hay conexion: (".$conn->connect_error.")". $conn->connect_error;
}


$nombre = $_POST ['usuario'];
$pass = md5($_POST ['password']);

if(isset ($_POST ['btnregistrar']))
{
    $pass_fuente = password_hash ($pass, PASSWORD_DEFAUL);
    $queryregistrar = "INSERT INTO baseadmin (usuario,clave) value ('$nombre', '$pass')";
    
if(mysqui_query ($conn,$queryregistrar))
{
    echo "<script>alert('usuario registrado: $nombre');window.location='index'</script>";
}
else
{
    echo "Error: ".$queryregistrar. "<br>".mysql_error($conn);
}
} 

