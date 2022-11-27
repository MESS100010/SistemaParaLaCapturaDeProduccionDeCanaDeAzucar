<?php

include("conexion.php");
$con=conectar();

$idActividad = $_POST['idActividad']; 
$Codigo = $_POST['Codigo']; 
$Descr = $_POST['Descr']; 
$Duracion = $_POST['Duracion']; 
$Des_Producto = $_POST['Des_Producto']; 
$Des_Empleado = $_POST['Des_Empleado']; 

$sql="UPDATE actividad SET Codigo='$Codigo', Descr = '$Descr', Duracion = '$Duracion',  Des_Producto = '$Des_Producto', Des_Empleado = '$Des_Empleado' WHERE idActividad='$idActividad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: actividad.php");
    }
?>