<?php
include("conexion.php");
$con=conectar();

$idEC = $_POST['idEC']; 
$idCultivo = $_POST['idCultivo']; 
$idEmpleado = $_POST['idEmpleado']; 

$sql = "INSERT INTO Emp_Cult(idEC,idCultivo,idEmpleado) 
VALUES ('$idEC','$idCultivo','$idEmpleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cultivo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>