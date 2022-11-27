<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM cultivo";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RESPORTES POR CULTIVO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="../img/icono.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
<br>
    <?php
    session_start();
    //echo "usuario: '$_SESSION[id]' y cargo: '$_SESSION[nivel]'";
?>

    <h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>
<?php
    if($_SESSION["nivel"] == "jefe de campo"){
        

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


<?php
    }else{
        ?>
<ul>                                  
            <li><a class="active" a href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a href="../Reportes/cultivo.php">Resportes Cultivos</a></li>
            <li><a  href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li></section>
        </ul>
        <?php
    }
?>

    <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>REPORTES DE CULTIVOS</h3>
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
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Cosecha</th>
                    <th>ID Campo</th>
                    <th>Notas</th>
                    <th>Progreso</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><a href="indexpdf.php? id=<?php echo $row['idCultivo'] ?>" class="btn btn-danger">PDF</a></th> 
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['FechaI']?></th>
                            <th><?php  echo $row['FechaC']?></th>
                            <th><?php  echo $row['idCampo']?></th>
                            <th><?php  echo $row['Notas']?></th> 
                            <th><?php  echo $row['Progreso']?></th>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>
</body>
</html>