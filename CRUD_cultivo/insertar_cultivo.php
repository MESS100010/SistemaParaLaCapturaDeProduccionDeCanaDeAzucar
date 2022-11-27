<?php
include("conexion.php");
$con=conectar();

$idCultivo = $_POST['idCultivo']; 
$FechaI = $_POST['FechaI']; 
$FechaC = $_POST['FechaC']; 
$idCampo = $_POST['idCampo']; 
$Notas = $_POST['Notas']; 
$Progreso = $_POST['Progreso']; 


$sql = "INSERT INTO cultivo(idCultivo,FechaI,FechaC,idCampo,Notas,Progreso) 
VALUES ('$idCultivo','$FechaI','$FechaC','$idCampo','$Notas','$Progreso')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cultivo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>