<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM usuario";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> USUARIO REGISTROS</title>
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
                <h3>USUARIO REGISTROS</h3>
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
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nivel</th>
                    <th>Username</th>
                    <th>Constraseña</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_usuario.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_usuario.php? id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idUsuario']?></th>
                            <th><?php  echo $row['Nombre']?></th>
                            <th><?php  echo $row['Ap']?></th>
                            <th><?php  echo $row['Am']?></th>
                            <th><?php  echo $row['Nivel']?></th> 
                            <th><?php  echo $row['Usuario']?></th>
                            <th><?php  echo $row['Contrasena']?></th>

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
                <h1>Registre usuario</h1>
                <form action="insertar_usuario.php" method="POST">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="Ap" placeholder="Apellido Paterno del Usuario">
                    <input type="text" class="form-control mb-3" name="Am" placeholder="Apellido Materno del Usuario">
                    <label for="Nivel">Nivel del Usuario:</label>
                            <select class="form-control mb-3" name="Nivel">
                                <option value="Administrador"> Administrador </option>
                                <option value="Ejidatario"> Ejidatario </option>
                                <option value="Jefe de Campo"> Jefe de Campo </option>
                            </select>                     
                    
                    <input type="text" class="form-control mb-3" name="Usuario" placeholder="Username">
                    <input type="text" class="form-control mb-3" name="Contrasena" placeholder="Contraseña">

                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
            </div>
        </div>  
    </div>
</body>
</html>