<?php
include("conexion.php");
$con=conectar();

$idUC = $_POST['idUC']; 
$idCultivo = $_POST['idCultivo']; 
$idUsuario = $_POST['idUsuario']; 

$sql = "INSERT INTO Usuario_Cult(idUC,idCultivo,idUsuario) 
VALUES ('$idUC','$idCultivo','$idUsuario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cultivo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>