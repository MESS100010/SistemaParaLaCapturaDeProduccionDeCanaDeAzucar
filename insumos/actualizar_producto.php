<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM Prod_Cult WHERE idPC='$id'";
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
                    <form action="actualizandoProducto.php" method="POST">
                            <input type="hidden" name="idPC" value="<?php echo $row['idPC']  ?>">
                             
            
                            <label for="idCultivo">Cultivo:</label>
                            <select class="form-control mb-3" name="idCultivo">
                                <option value="0"> Cultivo </option>
                                <?php 
                                include("ContCul2.php");
                                $coneCul2=conectarCul2();
                                $sqlCul2="SELECT * FROM cultivo";
                                $queryCul2=mysqli_query($coneCul2,$sqlCul2);
                                while($row=mysqli_fetch_array($queryCul2)){
                                echo '<option value="'.$row['idCultivo'].'">'.$row['idCultivo'].'</option>';
                            }
                                ?>
                            </select>

                            <label for="idProducto">Producto:</label>
                            <select class="form-control mb-3" name="idProducto">
                                <option value="0"> Producto </option>
                                <?php 
                                include("ContP.php");
                                $coneP=conectarP();
                                $sqlP="SELECT * FROM producto";
                                $queryP=mysqli_query($coneP,$sqlP);
                                while($row=mysqli_fetch_array($queryP)){
                                echo '<option value="'.$row['idProducto'].'">'.$row['Categoria'].'</option>';
                            }
                                ?>
                            </select>
                         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>