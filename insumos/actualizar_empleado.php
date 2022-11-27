<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM Emp_Cult WHERE idEC='$id'";
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
        <title>Actualizar Insumo Empleado</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../img/icono.png">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizandoEmpleado.php" method="POST">
                            <input type="hidden" name="idEC" value="<?php echo $row['idEC']  ?>">
                             
            
                            <label for="idCultivo">Cultivo:</label>
                            <select class="form-control mb-3" name="idCultivo">
                                <option value="0"> Cultivo </option>
                                <?php 
                                include("ContCul.php");
                                $coneCul=conectarCul();
                                $sqlCul="SELECT * FROM cultivo";
                                $queryCul=mysqli_query($coneCul,$sqlCul);
                                while($row=mysqli_fetch_array($queryCul)){
                                echo '<option value="'.$row['idCultivo'].'">'.$row['idCultivo'].'</option>';
                            }
                                ?>
                            </select>

                            <label for="idEmpleado">Empleado:</label>
                            <select class="form-control mb-3" name="idEmpleado">
                                <option value="0"> Empleado </option>
                                <?php 
                                include("ContE.php");
                                $coneE=conectarE();
                                $sqlE="SELECT * FROM empleado";
                                $queryE=mysqli_query($coneE,$sqlE);
                                while($row=mysqli_fetch_array($queryE)){
                                echo '<option value="'.$row['idEmpleado'].'">'.$row['Nom'].'</option>';
                            }
                                ?>
                            </select>
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>