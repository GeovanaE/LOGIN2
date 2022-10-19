<?php
$usuario=$_POST['email'];
$clave=md5($_POST['pswd']);

$conexion=mysqli_connect("localhost","root","123","Administracion");
$consulta="SELECT * FROM baseadmin WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header("location:bienvenido.php");
}
else {
    echo "Error en la autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);