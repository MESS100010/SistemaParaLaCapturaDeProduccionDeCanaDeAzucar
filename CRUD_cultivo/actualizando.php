<?php

include("conexion.php");
$con=conectar();

$idCultivo = $_POST['idCultivo']; 
$FechaI = $_POST['FechaI']; 
$FechaC = $_POST['FechaC']; 
$idCampo = $_POST['idCampo']; 
$Notas = $_POST['Notas']; 
$Progreso = $_POST['Progreso']; 

$sql="UPDATE cultivo SET FechaI='$FechaI', FechaC = '$FechaC', idCampo = '$idCampo', Notas = '$Notas', Progreso = '$Progreso' WHERE idCultivo='$idCultivo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>


