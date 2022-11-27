<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE idEmpleado='$id'";
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
        <title>Actualizar Registros del Empleado</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idEmpleado" value="<?php echo $row['idEmpleado']  ?>">
                             
                                    <input type="text" class="form-control mb-3" name="Nom" placeholder="Nombre" value="<?php echo $row['Nom']  ?>">
                                    <input type="text" class="form-control mb-3" name="Paterno" placeholder="Apellido Paterno" value="<?php echo $row['Paterno']  ?>">
                                    <input type="text" class="form-control mb-3" name="Materno" placeholder="Apellido Materno" value="<?php echo $row['Materno']  ?>">
                                    <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo" value="<?php echo $row['Sexo']  ?>">
                                    <input type="date" class="form-control mb-3" name="FecNac" placeholder="Fecha de Nacimiento"value="<?php echo $row['FecNac']  ?>">
                                    <input type="text" class="form-control mb-3" name="Edo" placeholder="Estado" value="<?php echo $row['Edo']  ?>">
                                    <input type="text" class="form-control mb-3" name="City" placeholder="Ciudad" value="<?php echo $row['City']  ?>">
                                    <input type="text" class="form-control mb-3" name="Calle_" placeholder="Calle" value="<?php echo $row['Calle_']  ?>">
                                    <input type="tel" class="form-control mb-3" name="Tel" placeholder="Teléfono" value="<?php echo $row['Tel']  ?>">
                                    <input type="email" class="form-control mb-3" name="Correo" placeholder="Correo Electrónico" value="<?php echo $row['Correo']  ?>">
                                    <input type="text" class="form-control mb-3" name="CP" placeholder="Código Postal" value="<?php echo $row['CP']  ?>">
                                    <input type="text" class="form-control mb-3" name="Puesto" placeholder="Puesto" value="<?php echo $row['Puesto']  ?>">
                                    <input type="text" class="form-control mb-3" name="Salario" placeholder="Salario" value="<?php echo $row['Salario']  ?>">
                                    <input type="date" class="form-control mb-3" name="Fec_Contrato" placeholder="Fecha de Contrato" value="<?php echo $row['Fec_Contrato']  ?>">                    





                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>