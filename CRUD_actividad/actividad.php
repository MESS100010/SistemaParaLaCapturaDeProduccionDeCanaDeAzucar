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
    </head>
    <body>
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
                            <th><a href="eliminar_actividad.php? id=<?php echo $row['idActividad'] ?>" class="btn btn-danger">Eliminar</a></th>  
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
                    <input required type="text" class="form-control mb-3" name="Codigo" placeholder="Código de la Actividad">
                    <input required type="text" class="form-control mb-3" name="Descr" placeholder="Descripción de la Actividad">
                    <input required type="number" class="form-control mb-3" name="Duracion" placeholder="Duración (En días)">
                    <input required type="text" class="form-control mb-3" name="Des_Producto" placeholder="Descripción del Producto">
                    <input required type="text" class="form-control mb-3" name="Des_Empleado" placeholder="Descripción del Empleado">
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
            </div>
        </div>  
    </div>
</body>
</html>