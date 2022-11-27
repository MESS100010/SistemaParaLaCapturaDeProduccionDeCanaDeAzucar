<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM actividad WHERE idActividad='$id'";
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
        <title>Actualizar Registros de la Actividad</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../img/icono.png">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idActividad" value="<?php echo $row['idActividad']  ?>">
                             
                                    <input type="text" class="form-control mb-3" name="Codigo" placeholder="Codigo de la Actividad" value="<?php echo $row['Codigo']  ?>">
                                    <input type="text" class="form-control mb-3" name="Descr" placeholder="Descripción de la Actividad" value="<?php echo $row['Descr']  ?>">
                                    <input type="number" class="form-control mb-3" name="Duracion" placeholder="Duracion (En días)" value="<?php echo $row['Duracion']  ?>">
                                    <input type="text" class="form-control mb-3" name="Des_Producto" placeholder="Descripción del Producto" value="<?php echo $row['Des_Producto']  ?>">
                                    <input type="text" class="form-control mb-3" name="Des_Empleado" placeholder="Descripción del Empleado"value="<?php echo $row['Des_Empleado']  ?>">
                                    
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>