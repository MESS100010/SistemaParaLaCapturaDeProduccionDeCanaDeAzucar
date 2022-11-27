<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM Usuario_Cult  WHERE idUC ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>