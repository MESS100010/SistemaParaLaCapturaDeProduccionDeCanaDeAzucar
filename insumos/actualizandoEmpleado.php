<?php

include("conexion.php");
$con=conectar();

$idEC = $_POST['idEC']; 
$idCultivo = $_POST['idCultivo']; 
$idEmpleado = $_POST['idEmpleado']; 

$sql="UPDATE Emp_Cult SET idEC='$idEC', idCultivo = '$idCultivo', idEmpleado = '$idEmpleado' WHERE idEC='$idEC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>


