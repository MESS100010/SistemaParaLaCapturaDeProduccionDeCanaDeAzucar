<?php

include("conexion.php");
$con=conectar();

$idAC = $_POST['idAC']; 
$idCultivo = $_POST['idCultivo']; 
$idActividad = $_POST['idActividad']; 

$sql="UPDATE Act_Cult SET idAC='$idAC', idCultivo = '$idCultivo', idActividad = '$idActividad' WHERE idAC='$idAC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>


