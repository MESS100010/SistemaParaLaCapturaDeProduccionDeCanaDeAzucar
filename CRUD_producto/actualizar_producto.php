<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM producto WHERE idProducto='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar Registros del Producto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']  ?>">
                             
                                    <input type="text" class="form-control mb-3" name="Codigo" placeholder="Codigo" value="<?php echo $row['Codigo']  ?>">
                                    <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria" value="<?php echo $row['Categoria']  ?>">
                                    <label for="Consistencia">Consistencia:</label>
                                        <select class="form-control mb-3" name="Consistencia" value="<?php echo $row['Consistencia']  ?>">
                                        <option value="Solido"> Sólido </option>
                                        <option value="Liquido"> Líquido </option>
                                        </select>
                                    <input type="number" class="form-control mb-3" name="Peso_Kg" placeholder="Peso (Kg)"value="<?php echo $row['Peso_Kg']  ?>">
                                    <input type="number" class="form-control mb-3" name="Peso_L" placeholder="Peso (L)" value="<?php echo $row['Peso_L']  ?>">
                                    <input type="number" class="form-control mb-3" name="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']  ?>">
                                    
                                    <label for="FechaVigencia">Fecha de Vigencia:</label>
                                    <input type="date" class="form-control mb-3" name="FechaVigencia" value="<?php echo $row['FechaVigencia']  ?>">

                                    <input type="number" class="form-control mb-3" name="PrecioUnitario" placeholder="Precio Unitario" value="<?php echo $row['PrecioUnitario']  ?>">
                                    <input type="number" class="form-control mb-3" name="PrecioMayoreo" placeholder="PrecioMayoreo" value="<?php echo $row['PrecioMayoreo']  ?>">
                                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
                                      
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>