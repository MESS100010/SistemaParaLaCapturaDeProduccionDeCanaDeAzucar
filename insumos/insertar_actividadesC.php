<?php
include("conexion.php");
$con=conectar();

$idAC = $_POST['idAC']; 
$idCultivo = $_POST['idCultivo']; 
$idActividad = $_POST['idActividad']; 

$sql = "INSERT INTO Act_Cult(idAC,idCultivo,idActividad) 
VALUES ('$idAC','$idCultivo','$idActividad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cultivo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>