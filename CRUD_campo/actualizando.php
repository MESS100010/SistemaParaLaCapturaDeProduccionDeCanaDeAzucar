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

$sql="UPDATE campo SET idCampo='$idCampo', Dueno = '$Dueno', Edo = '$Edo', Municipio = '$Municipio', Calle = '$Calle', NumLote = '$NumLote', Colonia = '$Colonia',  Area = '$Area', Estado_ = '$Estado_' WHERE idCampo='$idCampo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: campo.php");
    }
?>