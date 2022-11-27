<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM campo WHERE idCampo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: campo.php");
    }
?>