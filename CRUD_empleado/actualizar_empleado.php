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
        <link rel="icon" href="../img/icono.png">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizando.php" method="POST">
                            <input type="hidden" name="idEmpleado" value="<?php echo $row['idEmpleado']  ?>">
                             
                            <input type="text" class="form-control mb-3" name="Matricula" placeholder="Matrícula" value="<?php echo $row['Matricula']  ?>">
                            <input type="text" class="form-control mb-3" name="Nom" placeholder="Nombre del Empleado" value="<?php echo $row['Nom']  ?>">
                            <input type="text" class="form-control mb-3" name="Paterno" placeholder="Apellido Paterno del Empleado" value="<?php echo $row['Paterno']  ?>">
                            <input type="text" class="form-control mb-3" name="Materno" placeholder="Apellido Materno del Empleado" value="<?php echo $row['Materno']  ?>">
                            
                            <label for="Sexo">Sexo del Empleado:</label>
                            <select class="form-control mb-3" name="Sexo" value="<?php echo $row['Sexo']  ?>">
                                <option value="H"> Hombre </option>
                                <option value="M"> Mujer </option>
                                <option value="X"> Indistinto </option>
                            </select>
                            
                            <label for="FecNac">Fecha de Nacimiento del Empleado:</label>
                            <input type="date" class="form-control mb-3" name="FecNac"
                            min="1962-01-01" 
                            max="2004-12-31" value="<?php echo $row['FecNac']  ?>">

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
                            
                            <input type="text" class="form-control mb-3" name="City" placeholder="Ciudad" value="<?php echo $row['City']  ?>">
                            <input type="text" class="form-control mb-3" name="Calle_" placeholder="Calle" value="<?php echo $row['Calle_']  ?>">
                            
                            <label for="phone"> Teléfono:</label><small> (Formato: 777-370-27-36)</small> 
                            <input type="tel" class="form-control mb-3" id="Tel" name="Tel" placeholder="777-370-27-36" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" value="<?php echo $row['Tel']  ?>">
                            
                            
                            <input type="email" class="form-control mb-3" name="Correo" placeholder="Correo Electrónico" value="<?php echo $row['Correo']  ?>">
                            <input type="text" class="form-control mb-3" name="CP" placeholder="Código Postal" value="<?php echo $row['CP']  ?>">
                            <input type="text" class="form-control mb-3" name="Puesto" placeholder="Puesto asignado al Empleado" value="<?php echo $row['Puesto']  ?>">
                            <input type="number" class="form-control mb-3" name="Salario" placeholder="Salario asignado al Empleado" value="<?php echo $row['Salario']  ?>">
                                            
                            <label for="Fec_Contrato">Fecha de Contrato del Empleado:</label>
                            <input type="date" class="form-control mb-3" name="Fec_Contrato"
                            min="1962-01-01" 
                            max=2022-11-17 value="<?php echo $row['Fec_Contrato']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>