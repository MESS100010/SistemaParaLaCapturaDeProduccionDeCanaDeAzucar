<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM Act_Cult  WHERE idAC ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>