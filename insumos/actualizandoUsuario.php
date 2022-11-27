<?php

include("conexion.php");
$con=conectar();

$idUC = $_POST['idUC']; 
$idCultivo = $_POST['idCultivo']; 
$idUsuario = $_POST['idUsuario']; 

$sql="UPDATE Usuario_Cult SET idUC='$idUC', idCultivo = '$idCultivo', idUsuario = '$idUsuario' WHERE idUC='$idUC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>


