<?php
include("conexion.php");
$con=conectar();

$idPC = $_POST['idPC']; 
$idCultivo = $_POST['idCultivo']; 
$idProducto = $_POST['idProducto']; 

$sql = "INSERT INTO Prod_Cult(idPC,idCultivo,idProducto) 
VALUES ('$idPC','$idCultivo','$idProducto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cultivo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>