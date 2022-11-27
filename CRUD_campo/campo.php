<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM campo";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CAMPO REGISTROS</title>
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
                <h3>CAMPO REGISTROS</h3>
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
                    <th>Dueño</th>
                    <th>Provincia</th>
                    <th>Municipio</th>
                    <th>Calle</th>
                    <th>Numero de Lote</th>
                    <th>Colonia</th>
                    <th>Area</th>
                    <th>Estado del Campo</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_campo.php?id=<?php echo $row['idCampo'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_campo.php? id=<?php echo $row['idCampo'] ?>" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idCampo']?></th>
                            <th><?php  echo $row['Dueno']?></th>
                            <th><?php  echo $row['Edo']?></th>
                            <th><?php  echo $row['Municipio']?></th>
                            <th><?php  echo $row['Calle']?></th> 
                            <th><?php  echo $row['NumLote']?></th>
                            <th><?php  echo $row['Colonia']?></th>
                            <th><?php  echo $row['Area']?></th> 
                            <th><?php  echo $row['Estado_']?></th>
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
                <h1>Registre campo</h1>
                <form action="insertar_campo.php" method="POST">
                    
                    <input type="text" class="form-control mb-3" name="Dueno" placeholder="Dueño del Campo">
                        
                    <label for="Edo">Estado:</label>
                        <select class="form-control mb-3" name="Edo">
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

                    <input type="text" class="form-control mb-3" name="Municipio" placeholder="Municipio del Campo">
                    <input type="text" class="form-control mb-3" name="Calle" placeholder="Calle del Campo">
                    <input type="number" class="form-control mb-3" name="NumLote" placeholder="Numero de Lote del Campo">
                    <input type="text" class="form-control mb-3" name="Colonia" placeholder="Colonia del Campo">
                    <input type="text" class="form-control mb-3" name="Area" placeholder="Area del Campo">
                    
                    <label for="Estado_">Estado del Campo:</label>
                    <select class="form-control mb-3" name="Estado_">
                        <option value="Ocupado"> Ocupado </option>
                        <option value="Libre"> Libre </option>
                    </select>
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
            </div>
        </div>  
    </div>
</body>
</html>