<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM cliente WHERE cod_cliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
