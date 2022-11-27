<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM cultivo WHERE idCultivo='$id'";
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
        <title>Actualizar Registros del Cultivo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idCultivo" value="<?php echo $row['idCultivo']  ?>">
                             
            
                                    <label for="FechaI">Fecha de Inicío del Cultivo:</label>
                                    <input type="date" class="form-control mb-3" id="FechaI" name="FechaI" value="<?php echo $row['FechaI']  ?>">
                                    
                                    <label for="FechaC">Fecha de Cosecha del Cultivo:</label>
                                    <input type="date" class="form-control mb-3" id="FechaC" name="FechaC" value="<?php echo $row['FechaC']  ?>">
                                    
                                    <input type="text" class="form-control mb-3" name="idCampo" placeholder="id del Campo" value="<?php echo $row['idCampo']  ?>">

                                    <label for="Notas">Notas:</label><br>
                                    <textarea class="form-control mb-3" id="Notas" name="Notas" rows="10" cols="50" value="<?php echo $row['Notas']  ?>">
                                    </textarea>

                                    <label for="Progreso">Progreso:</label>
                                    <select class="form-control mb-3" name="Progreso" value="<?php echo $row['Progreso']  ?>">
                                        <option value="Iniciado"> Iniciado </option>
                                        <option value="Sembrado"> Sembrado </option>
                                        <option value="Finalizado"> Finalizado </option>
                                    </select>
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>