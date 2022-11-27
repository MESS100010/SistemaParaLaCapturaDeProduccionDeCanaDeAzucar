<?php

include("conexion.php");
$con=conectar();

$idPC = $_POST['idPC']; 
$idCultivo = $_POST['idCultivo']; 
$idProducto = $_POST['idProducto']; 

$sql="UPDATE Prod_Cult SET idPC='$idPC', idCultivo = '$idCultivo', idProducto = '$idProducto' WHERE idPC='$idPC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>


