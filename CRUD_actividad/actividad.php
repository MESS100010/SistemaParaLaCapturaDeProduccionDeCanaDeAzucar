<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM actividad";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> ACTIVIDAD REGISTROS</title>
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
    li button {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li button:hover {
    background-color: rgb(27, 214, 27);
    }
    li input {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li input:hover {
    background-color: rgb(27, 214, 27);
    }
    .active{
    background-color: rgb(40, 100, 75);
    border: 0;
    }

</style>
    <body>

    <?php
    session_start();
    //echo "usuario: '$_SESSION[id]' y cargo: '$_SESSION[nivel]'";
?>
<br>
<h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>
<?php
    if($_SESSION["nivel"] == "jefe de campo"){
        

        ?>

<ul>                 
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li>               
            <li><a class="desactivar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a class="desactivar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                    <h3>ACTIVIDAD REGISTROS</h3>
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
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Descripción del Producto</th>
                    <th>Descripción del Empleado</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php  echo $row['idActividad']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Descr']?></th>
                            <th><?php  echo $row['Duracion']?></th>
                            <th><?php  echo $row['Des_Producto']?></th> 
                            <th><?php  echo $row['Des_Empleado']?></th>
                            
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
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li> 
            <li><a class="desactivar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a class="desactivar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                    <h3>ACTIVIDAD REGISTROS</h3>
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
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Descripción del Producto</th>
                    <th>Descripción del Empleado</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_actividad.php?id=<?php echo $row['idActividad'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><?php  echo $row['idActividad']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Descr']?></th>
                            <th><?php  echo $row['Duracion']?></th>
                            <th><?php  echo $row['Des_Producto']?></th> 
                            <th><?php  echo $row['Des_Empleado']?></th>
                            
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
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li>                              
            <li><a class="activar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a class="activar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li>
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                    <h3>ACTIVIDAD REGISTROS</h3>
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
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Descripción del Producto</th>
                    <th>Descripción del Empleado</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_actividad.php?id=<?php echo $row['idActividad'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_actividad.php? id=<?php echo $row['idActividad'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>  
                            <th><?php  echo $row['idActividad']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Descr']?></th>
                            <th><?php  echo $row['Duracion']?></th>
                            <th><?php  echo $row['Des_Producto']?></th> 
                            <th><?php  echo $row['Des_Empleado']?></th>
                            
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
                <h1>Registre actividad</h1>
                <form action="insertar_actividad.php" method="POST">
                    <label for="Codigo">Código:</label>
                    <input required type="text" class="form-control mb-3" name="Codigo" placeholder="Código de la Actividad">
                    <label for="Descr">Descripción:</label>
                    <input required type="text" class="form-control mb-3" name="Descr" placeholder="Descripción de la Actividad">
                    <label for="Duracion">Duración:</label>
                    <input required type="number" class="form-control mb-3" name="Duracion" placeholder="Duración (En días)">
                    <label for="Des_Producto">Descripción del producto:</label>
                    <input required type="text" class="form-control mb-3" name="Des_Producto" placeholder="Descripción del Producto">
                    <label for="Des_Empleado">Descripción de empleados:</label>
                    <input required type="text" class="form-control mb-3" name="Des_Empleado" placeholder="Descripción de Empleados">
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
            </div>
        </div>  
    </div>

        <?php
    }
?>
</body>
</html>