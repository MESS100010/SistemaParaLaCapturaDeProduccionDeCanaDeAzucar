<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM Prod_Cult  WHERE idPC ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>