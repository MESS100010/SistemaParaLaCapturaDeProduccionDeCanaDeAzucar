<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM Emp_Cult  WHERE idEC ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cultivo.php");
    }
?>