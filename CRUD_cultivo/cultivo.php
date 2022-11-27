<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM cultivo";
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
                            
                            <th><a href="actualizar_cultivo.php?id=<?php echo $row['idCultivo'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_cultivo.php? id=<?php echo $row['idCultivo'] ?>" class="btn btn-danger">Eliminar</a></th>   
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
    
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3">
                <h1>Registre cultivo</h1>
                <form action="insertar_cultivo.php" method="POST">

                    <label for="FechaI">Fecha de Inicío del Cultivo:</label>
                    <input type="date" class="form-control mb-3" id="FechaI" name="FechaI">
                    
                    <label for="FechaC">Fecha de Cosecha del Cultivo:</label>
                    <input type="date" class="form-control mb-3" id="FechaC" name="FechaC">
                    
                    <input type="text" class="form-control mb-3" name="idCampo" placeholder="id del Campo">

                    <label for="Notas">Notas:</label><br>
                    <textarea class="form-control mb-3" id="Notas" name="Notas" rows="10" cols="50">
                    </textarea>

                    <label for="Progreso">Progreso:</label>
                    <select class="form-control mb-3" name="Sexo">
                        <option value="Iniciado"> Iniciado </option>
                        <option value="Sembrado"> Sembrado </option>
                        <option value="Finalizado"> Finalizado </option>
                    </select>
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
            </div>
        </div>  
    </div>
</body>
</html>