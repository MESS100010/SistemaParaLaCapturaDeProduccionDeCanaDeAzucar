<?php

include("conexion.php");
$con=conectar();


$idProducto= $_POST['idProducto']; 
$Codigo = $_POST['Codigo']; 
$Categoria = $_POST['Categoria']; 
$Consistencia = $_POST['Consistencia']; 
$Peso_Kg = $_POST['Peso_Kg']; 
$Peso_L = $_POST['Peso_L']; 
$Cantidad = $_POST['Cantidad']; 
$FechaVigencia = $_POST['FechaVigencia']; 
$PrecioUnitario = $_POST['PrecioUnitario']; 
$PrecioMayoreo = $_POST['PrecioMayoreo']; 
$Marca = $_POST['Marca']; 

$sql="UPDATE producto SET Codigo='$Codigo', Categoria = '$Categoria', Consistencia = '$Consistencia', Peso_Kg = '$Peso_Kg', Peso_L = '$Peso_L', Cantidad = '$Cantidad',  FechaVigencia = '$FechaVigencia',  PrecioUnitario = '$PrecioUnitario',  PrecioMayoreo = '$PrecioMayoreo', Marca = '$Marca' WHERE idProducto='$idProducto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>