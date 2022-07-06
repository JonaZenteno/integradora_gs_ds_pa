<?php
include("conexion.php");
$con=conectar();

$cod_cliente=$_POST['cod_cliente'];
$plan=$_POST['plan'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];


$sql="INSERT INTO cliente VALUES('$cod_cliente','$plan','$nombre','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:cliente.php");
    
}else {
}
?>