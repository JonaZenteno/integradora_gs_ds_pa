<?php

include("conexion.php");
$con=conectar();

$cod_cliente=$_POST['cod_cliente'];
$plan=$_POST['plan'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$sql="UPDATE cliente SET  plan='$plan',nombre='$nombre',correo='$correo' WHERE cod_cliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>