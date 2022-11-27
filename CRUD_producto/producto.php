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
        <link rel="icon" href="../img/icono.png">
    </head>
    <style>
    h1.b {
        font-family: 'Lucida Handwriting', cursive;
        color: rgb(82, 138, 43);
        font-size: 50px;
    }

    .desactivar{
	pointer-events: none;
}
    
    .button {
    background-color: #086d0b;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    /*Sombras*/
    -webkit-transition-duration: 0.1s; /* Safari */
    transition-duration: 0.1s;
    }
    .button22:hover {
    background-color: #51be55;
    color: white;
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(40, 100, 75);
    }
    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover {
    background-color: rgb(27, 214, 27);
    }
</style>
    <body>

    <?php
    session_start();
    //echo "usuario: '$_SESSION[id]' y cargo: '$_SESSION[nivel]'";
?>
<h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>
<?php
    if($_SESSION["nivel"] == "jefe de campo"){
        

        ?>

<ul>                               
            <li><a class="desactivar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../Reportes/cultivo.php">Resportes Cultivos</a></li>
            <li><a class="desactivar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
        </ul>

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

<?php
    }else if($_SESSION["nivel"] == "ejidatario"){
        ?>

<ul> 
            <li><a class="desactivar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../Reportes/cultivo.php">Resportes Cultivos</a></li>
            <li><a class="desactivar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
        </ul>

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


<?php
    }else{
        ?>
<ul>                               
            <li><a class="activar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../Reportes/cultivo.php">Resportes Cultivos</a></li>
            <li><a class="activar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
        </ul>

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
                            <th><a href="eliminar_producto.php? id=<?php echo $row['idProducto'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
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
                    <label for="Codigo">Código:</label>
                    <input required type="text" class="form-control mb-3" name="Codigo" placeholder="Código del Producto">
                    <label for="Categoria">Categoría:</label>
                    <input required type="text" class="form-control mb-3" name="Categoria" placeholder="Categoría del Producto">
                    
                    <label for="Consistencia">Consistencia:</label>
                    <select class="form-control mb-3" name="Consistencia">
                    <option value="Solido"> Sólido </option>
                    <option value="Liquido"> Líquido </option>
                    </select>
                    <label for="Peso_Kg">Peso en Kg:</label>
                    <input required type="number" class="form-control mb-3" name="Peso_Kg" placeholder="Peso (Kg)">
                    <label for="Peso_L">Peso en L:</label>
                    <input required type="number" class="form-control mb-3" name="Peso_L" placeholder="Peso (L)">  
                    <label for="Cantidad">Cantidad:</label>     
                    <input required type="number" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">       

                    
                    <label for="FechaVigencia">Fecha de Vigencia:</label>
                    <input required type="date" class="form-control mb-3" name="FechaVigencia">
                    
                    <label for="PrecioUnitario">Precio unitario:</label>
                    <input required type="number" class="form-control mb-3" name="PrecioUnitario" placeholder="Precio Unitario">
                    <label for="PrecioMayoreo">Precio mayoreo:</label>
                    <input required type="number" class="form-control mb-3" name="PrecioMayoreo" placeholder="Precio Mayoreo">
                    <label for="Marca">Marca:</label>
                    <input required type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-primary">
                </form>
            </div>
        </div>  
    </div>

        <?php
    }
?>

</body>
</html>