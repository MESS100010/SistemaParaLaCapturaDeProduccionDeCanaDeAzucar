<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM actividad  WHERE idActividad='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: actividad.php");
    }
?>