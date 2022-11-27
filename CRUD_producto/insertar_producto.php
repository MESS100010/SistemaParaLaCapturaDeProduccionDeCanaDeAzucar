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

$sql = "INSERT INTO producto(Codigo,Categoria,Consistencia,Peso_Kg,Peso_L,Cantidad,FechaVigencia,PrecioUnitario,PrecioMayoreo,Marca) 
VALUES ('$Codigo','$Categoria','$Consistencia','$Peso_Kg','$Peso_L','$Cantidad','$FechaVigencia','$PrecioUnitario','$PrecioMayoreo','$Marca')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
    echo"No hay conexión establecida";
}
?>