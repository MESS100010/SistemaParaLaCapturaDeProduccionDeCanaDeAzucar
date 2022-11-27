<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM Usuario_Cult WHERE idUC='$id'";
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
                    <form action="actualizandoUsuario.php" method="POST">
                            <input type="hidden" name="idUC" value="<?php echo $row['idUC']  ?>">
                             
            
                            <label for="idCultivo">Cultivo:</label>
                            <select class="form-control mb-3" name="idCultivo">
                                <option value="0"> Cultivo </option>
                                <?php 
                                include("ContCul4.php");
                                $coneCul4=conectarCul4();
                                $sqlCul4="SELECT * FROM cultivo";
                                $queryCul4=mysqli_query($coneCul4,$sqlCul4);
                                while($row=mysqli_fetch_array($queryCul4)){
                                echo '<option value="'.$row['idCultivo'].'">'.$row['idCultivo'].'</option>';
                            }
                                ?>
                            </select>

                            <label for="idUsuario">Usuario:</label>
                            <select class="form-control mb-3" name="idUsuario">
                                <option value="0"> Usuario </option>
                                <?php 
                                include("ContU.php");
                                $coneU=conectarU();
                                $sqlU="SELECT * FROM usuario";
                                $queryU=mysqli_query($coneU,$sqlU);
                                while($row=mysqli_fetch_array($queryU)){
                                echo '<option value="'.$row['idUsuario'].'">'.$row['Nombre'].'</option>';
                            }
                                ?>
                            </select>
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>