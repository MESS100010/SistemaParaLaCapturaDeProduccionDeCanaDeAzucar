<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM Act_Cult WHERE idAC='$id'";
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
                    <form action="actualizandoActividad.php" method="POST">
                            <input type="hidden" name="idAC" value="<?php echo $row['idAC']  ?>">
                             
            
                            <label for="idCultivo">Cultivo:</label>
                            <select class="form-control mb-3" name="idCultivo">
                                <option value="0"> Cultivo </option>
                                <?php 
                                include("ContCul3.php");
                                $coneCul3=conectarCul3();
                                $sqlCul3="SELECT * FROM cultivo";
                                $queryCul3=mysqli_query($coneCul3,$sqlCul3);
                                while($row=mysqli_fetch_array($queryCul3)){
                                echo '<option value="'.$row['idCultivo'].'">'.$row['idCultivo'].'</option>';
                            }
                                ?>
                            </select>

                            <label for="idActividad">Actividad:</label>
                            <select class="form-control mb-3" name="idActividad">
                                <option value="0"> Actividad </option>
                                <?php 
                                include("ContA.php");
                                $coneA=conectarA();
                                $sqlA="SELECT * FROM actividad";
                                $queryA=mysqli_query($coneA,$sqlA);
                                while($row=mysqli_fetch_array($queryA)){
                                echo '<option value="'.$row['idActividad'].'">'.$row['Descr'].'</option>';
                            }
                                ?>
                            </select>
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>