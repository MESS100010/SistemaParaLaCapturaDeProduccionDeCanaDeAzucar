<?php

include("conexion.php");
$con=conectar();

$idUsuario = $_POST['idUsuario']; 
$Nombre = $_POST['Nombre']; 
$Ap = $_POST['Ap']; 
$Am = $_POST['Am']; 
$Nivel = $_POST['Nivel']; 
$Usuario = $_POST['Usuario']; 
$Contrasena = $_POST['Contrasena']; 

$sql="UPDATE usuario SET Nombre='$Nombre', Ap = '$Ap', Am = '$Am', Nivel = '$Nivel', Usuario = '$Usuario', Contrasena = '$Contrasena' WHERE idUsuario ='$idUsuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>