<?php
include("conexion.php");
$con=conectar();

$idActividad = $_POST['idActividad']; 
$Codigo = $_POST['Codigo']; 
$Descr = $_POST['Descr']; 
$Duracion = $_POST['Duracion']; 
$Des_Producto = $_POST['Des_Producto']; 
$Des_Empleado = $_POST['Des_Empleado']; 


$sql = "INSERT INTO actividad(Codigo,Descr,Duracion,Des_Producto,Des_Empleado) 
VALUES ('$Codigo','$Descr','$Duracion','$Des_Producto','$Des_Empleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: actividad.php");
    
}else {
    echo"No hay conexión establecida";
}
?>