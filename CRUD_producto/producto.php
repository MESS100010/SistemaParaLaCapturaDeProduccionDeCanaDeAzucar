<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PRODUCTO REGISTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>PRODUCTO REGISTROS</h3>
                </th>
            </tr>
        </table>
    </div>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Consistencia</th>
                    <th>Peso_Kg</th>
                    <th>Peso_L</th>
                    <th>Cantidad</th>
                    <th>Fecha de Vigencia</th>
                    <th>Precio Unitario</th>
                    <th>Precio Mayoreo</th>
                    <th>Marca</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_producto.php?id=<?php echo $row['idProducto'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_producto.php? id=<?php echo $row['idProducto'] ?>" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idProducto']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Categoria']?></th>
                            <th><?php  echo $row['Consistencia']?></th> 
                            <th><?php  echo $row['Peso_Kg']?></th>
                            <th><?php  echo $row['Peso_L']?></th>
                            <th><?php  echo $row['Cantidad']?></th>
                            <th><?php  echo $row['FechaVigencia']?></th> 
                            <th><?php  echo $row['PrecioUnitario']?></th>
                            <th><?php  echo $row['PrecioMayoreo']?></th>
                            <th><?php  echo $row['Marca']?></th> 
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>
    
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3">
                <h1>Registre producto</h1>
                <form action="insertar_producto.php" method="POST">
                    <input type="text" class="form-control mb-3" name="Codigo" placeholder="Código del Producto">
                    <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoría del Producto">
                    
                    <label for="Consistencia">Consistencia:</label>
                    <select class="form-control mb-3" name="Consistencia">
                    <option value="Solido"> Sólido </option>
                    <option value="Liquido"> Líquido </option>
                    </select>
                    <input type="number" class="form-control mb-3" name="Peso_Kg" placeholder="Peso (Kg)">
                    <input type="number" class="form-control mb-3" name="Peso_L" placeholder="Peso (L)">       
                    <input type="number" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">       

                    
                    <label for="FechaVigencia">Fecha de Vigencia:</label>
                    <input type="date" class="form-control mb-3" name="FechaVigencia">
                    

                    <input type="number" class="form-control mb-3" name="PrecioUnitario" placeholder="Precio Unitario">
                    <input type="number" class="form-control mb-3" name="PrecioMayoreo" placeholder="Precio Mayoreo">
                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-primary">
                </form>
            </div>
        </div>  
    </div>
</body>
</html>