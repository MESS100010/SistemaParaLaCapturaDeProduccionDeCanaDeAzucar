<?php

include("conexion.php");
$con=conectar();

$idEmpleado= $_POST['idEmpleado']; 
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

$sql="UPDATE empleado SET nom='$Nom', Paterno = '$Paterno', Materno = '$Materno', Sexo = '$Sexo', FecNac = '$FecNac', Edo = '$Edo', City = '$City',  Calle_ = '$Calle_',  Tel = '$Tel',  Correo = '$Correo', CP = '$CP', Puesto = '$Puesto', Salario = '$Salario',  Fec_Contrato = '$Fec_Contrato' WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>