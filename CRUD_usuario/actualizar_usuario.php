<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE idUsuario='$id'";
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
        <title>Actualizar Registros del Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../img/icono.png">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']  ?>">

                            
                            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                            <input type="text" class="form-control mb-3" name="Ap" placeholder="Apellido Paterno del Usuario" value="<?php echo $row['Ap']  ?>">
                            <input type="text" class="form-control mb-3" name="Am" placeholder="Apellido Materno del Usuario" value="<?php echo $row['Am']  ?>">
                            <label for="Nivel">Nivel del Usuario:</label>
                                    <select class="form-control mb-3" name="Nivel" value="<?php echo $row['Nivel']  ?>">
                                        <option value="Administrador"> Administrador </option>
                                        <option value="Ejidatario"> Ejidatario </option>
                                        <option value="Jefe de Campo"> Jefe de Campo </option>
                                    </select>                     
                            
                            <input type="text" class="form-control mb-3" name="Usuario" placeholder="Username" value="<?php echo $row['Usuario']  ?>">
                            <input type="text" class="form-control mb-3" name="Contrasena" placeholder="Contraseña" value="<?php echo $row['Contrasena']  ?>">
                            
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                        
                            
                    
                </div>
    </body>
</html>