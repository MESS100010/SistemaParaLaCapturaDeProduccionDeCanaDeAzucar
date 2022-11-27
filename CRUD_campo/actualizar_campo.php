<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

$sql="SELECT * FROM campo WHERE idCampo='$id'";
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
        <title>Actualizar Registros del Campo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../img/icono.png">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idCampo" value="<?php echo $row['idCampo']  ?>">
                            <input type="text" class="form-control mb-3" name="Dueno" placeholder="Dueño del Campo" value="<?php echo $row['Dueno']  ?>">
                        
                            <label for="Edo">Estado:</label>
                                <select class="form-control mb-3" name="Edo" value="<?php echo $row['Edo']  ?>">
                                    <option value="Aguascalientes"> Aguascalientes </option>
                                    <option value="Baja California"> Baja California </option>
                                    <option value="Baja California Sur"> Baja California Sur </option>
                                    <option value="Campeche"> Campeche </option>
                                    <option value="Chiapas"> Chiapas </option>
                                    <option value="Chihuahua"> Chihuahua </option>
                                    <option value="Coahuila"> Coahuila </option>
                                    <option value="Colima"> Colima </option>
                                    <option value="CDMX"> CDMX </option>
                                    <option value="Durango"> Durango </option>
                                    <option value="Guanajuato"> Guanajuato </option>
                                    <option value="Guerrero"> Guerrero </option>
                                    <option value="Hidalgo"> Hidalgo </option>
                                    <option value="Jalisco"> Jalisco </option>
                                    <option value="México"> México </option>
                                    <option value="Michoacán"> Michoacán </option>
                                    <option value="Morelos"> Morelos </option>
                                    <option value="Nayarit"> Nayarit </option>
                                    <option value="Nuevo León"> Nuevo León </option>
                                    <option value="Oaxaca"> Oaxaca </option>
                                    <option value="Puebla"> Puebla </option>
                                    <option value="Querétaro"> Querétaro </option>
                                    <option value="Quintana Roo"> Quintana Roo </option>
                                    <option value="San Luis Potosí"> San Luis Potosí </option>
                                    <option value="Sinaloa"> Sinaloa </option>
                                    <option value="Sonora"> Sonora </option>
                                    <option value="Tabasco"> Tabasco </option>
                                    <option value="Tamaulipas"> Tamaulipas </option>
                                    <option value="Tlaxcala"> Tlaxcala </option>
                                    <option value="Veracruz"> Veracruz </option>
                                    <option value="Yucatán"> Yucatán </option>
                                    <option value="Zacatecas"> Zacatecas </option>
                            </select>

                            <input type="text" class="form-control mb-3" name="Municipio" placeholder="Municipio del Campo" value="<?php echo $row['Municipio']  ?>">
                            <input type="text" class="form-control mb-3" name="Calle" placeholder="Calle del Campo" value="<?php echo $row['Calle']  ?>">
                            <input type="number" class="form-control mb-3" name="NumLote" placeholder="Numero de Lote del Campo" value="<?php echo $row['NumLote']  ?>">
                            <input type="text" class="form-control mb-3" name="Colonia" placeholder="Colonia del Campo" value="<?php echo $row['Colonia']  ?>">
                            <input type="text" class="form-control mb-3" name="Area" placeholder="Area del Campo" value="<?php echo $row['Area']  ?>">
                            
                            <label for="Estado_">Estado del Campo:</label>
                            <select class="form-control mb-3" name="Estado_" value="<?php echo $row['Estado_']  ?>">
                                <option value="Ocupado"> Ocupado </option>
                                <option value="Libre"> Libre </option>
                            </select>
                                
                                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>