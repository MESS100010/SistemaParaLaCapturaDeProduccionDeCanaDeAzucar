<?php
include("conexion.php");
$con=conectar();

$idCampo = $_POST['idCampo']; 
$Dueno = $_POST['Dueno']; 
$Edo = $_POST['Edo']; 
$Municipio = $_POST['Municipio']; 
$Calle = $_POST['Calle']; 
$NumLote = $_POST['NumLote']; 
$Colonia = $_POST['Colonia']; 
$Area = $_POST['Area']; 
$Estado_ = $_POST['Estado_']; 


$sql = "INSERT INTO campo(idCampo,Dueno,Edo,Municipio,Calle,NumLote,Colonia,Area,Estado_) 
VALUES ('$idCampo','$Dueno','$Edo','$Municipio','$Calle','$NumLote','$Colonia','$Area','$Estado_')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: campo.php");
    
}else {
    echo"No hay conexión establecida";
}
?>