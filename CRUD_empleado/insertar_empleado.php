<?php
include("conexion.php");
$con=conectar();

$Matricula = $_POST['Matricula']; 
$Nom = $_POST['Nom']; 
$Paterno = $_POST['Paterno']; 
$Materno = $_POST['Materno']; 
$Sexo = $_POST['Sexo']; 
$FecNac = $_POST['FecNac']; 
$Edo = $_POST['Edo']; 
$City = $_POST['City']; 
$Calle_ = $_POST['Calle_']; 
$Tel = $_POST['Tel']; 
$Correo = $_POST['Correo']; 
$CP = $_POST['CP']; 
$Puesto = $_POST['Puesto']; 
$Salario = $_POST['Salario']; 
$Fec_Contrato = $_POST['Fec_Contrato']; 

$sql = "INSERT INTO empleado(Matricula,Nom,Paterno,Materno,Sexo,FecNac,Edo,City,Calle_,Tel,Correo,CP,Puesto,Salario,Fec_Contrato) 
VALUES ('$Matricula','$Nom','$Paterno','$Materno','$Sexo','$FecNac','$Edo','$City','$Calle_','$Tel','$Correo','$CP','$Puesto','$Salario','$Fec_Contrato')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
    echo"No hay conexión establecida";
}
?>