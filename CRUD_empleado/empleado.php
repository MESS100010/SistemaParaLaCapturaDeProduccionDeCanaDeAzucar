<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM empleado";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> EMPLEADO REGISTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../img/icono.png">
    </head>
    <style>
    h1.b {
        font-family: 'Lucida Handwriting', cursive;
        color: rgb(82, 138, 43);
        font-size: 50px;
    }

    .desactivar{
	pointer-events: none;
}
    
    .button {
    background-color: #086d0b;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    /*Sombras*/
    -webkit-transition-duration: 0.1s; /* Safari */
    transition-duration: 0.1s;
    }
    .button22:hover {
    background-color: #51be55;
    color: white;
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(40, 100, 75);
    }
    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover {
    background-color: rgb(27, 214, 27);
    }
    li button {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li button:hover {
    background-color: rgb(27, 214, 27);
    }
    li input {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li input:hover {
    background-color: rgb(27, 214, 27);
    }
    .active{
    background-color: rgb(40, 100, 75);
    border: 0;
    }

</style>
    <body>
    <?php
    session_start();
    //echo "usuario: '$_SESSION[id]' y cargo: '$_SESSION[nivel]'";
?>
<p></p>
    <h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>
<?php
    if($_SESSION["nivel"] == "jefe de campo"){
        

        ?>

<ul>      
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li>                         
            <li><a class="desactivar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a class="desactivar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>EMPLEADO REGISTROS</h3>
                </th>
            </tr>
        </table>
    </div>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th>ID</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Codigo Postal</th>
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Fecha de Contrato</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><?php  echo $row['idEmpleado']?></th>
                            <th><?php  echo $row['Matricula']?></th>
                            <th><?php  echo $row['Nom']?></th>
                            <th><?php  echo $row['Paterno']?></th>
                            <th><?php  echo $row['Materno']?></th> 
                            <th><?php  echo $row['Sexo']?></th>
                            <th><?php  echo $row['FecNac']?></th>
                            <th><?php  echo $row['Edo']?></th>
                            <th><?php  echo $row['City']?></th> 
                            <th><?php  echo $row['Calle_']?></th>
                            <th><?php  echo $row['Tel']?></th>
                            <th><?php  echo $row['Correo']?></th>
                            <th><?php  echo $row['CP']?></th> 
                            <th><?php  echo $row['Puesto']?></th>
                            <th><?php  echo $row['Salario']?></th>
                            <th><?php  echo $row['Fec_Contrato']?></th> 
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>


<?php
    }else if($_SESSION["nivel"] == "ejidatario"){
        ?>

<ul>    
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li>                            
            <li><a class="activar" href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a class="activar" href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>EMPLEADO REGISTROS</h3>
                </th>
            </tr>
        </table>
    </div>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th>ID</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Codigo Postal</th>
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Fecha de Contrato</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><?php  echo $row['idEmpleado']?></th>
                            <th><?php  echo $row['Matricula']?></th>
                            <th><?php  echo $row['Nom']?></th>
                            <th><?php  echo $row['Paterno']?></th>
                            <th><?php  echo $row['Materno']?></th> 
                            <th><?php  echo $row['Sexo']?></th>
                            <th><?php  echo $row['FecNac']?></th>
                            <th><?php  echo $row['Edo']?></th>
                            <th><?php  echo $row['City']?></th> 
                            <th><?php  echo $row['Calle_']?></th>
                            <th><?php  echo $row['Tel']?></th>
                            <th><?php  echo $row['Correo']?></th>
                            <th><?php  echo $row['CP']?></th> 
                            <th><?php  echo $row['Puesto']?></th>
                            <th><?php  echo $row['Salario']?></th>
                            <th><?php  echo $row['Fec_Contrato']?></th> 
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>


<?php
    }else{
        ?>
<ul>      
            <li><a class="active" href="../iniciar sesión\pagina.php">Principal</a></li>                             
            <li><a class="active" a href="../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a href="../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a href="../CRUD_campo\campo.php">Campos</a></li>
            <li><a href="../CRUD_producto\producto.php">Productos</a></li>
            <li><a href="../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a href="../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../insumos\cultivo.php">Insumos de cultivo</a></li>
            <form name="button" action="../Reportes/cultivo.php" method="post">
            <input type="hidden" name="OpcionFiltro" value="NULL">
            <input type="hidden" name="OpcionFiltroE" value="NULL">
            <input type="hidden" name="OpcionFiltroP" value="NULL">
            <li><button type="submit" class="active">Reportes cultivos</button></li>
            </form>
            <li><a  href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li></section>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>

        <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>EMPLEADO REGISTROS</h3>
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
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Codigo Postal</th>
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Fecha de Contrato</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_empleado.php?id=<?php echo $row['idEmpleado'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_empleado.php? id=<?php echo $row['idEmpleado'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idEmpleado']?></th>
                            <th><?php  echo $row['Matricula']?></th>
                            <th><?php  echo $row['Nom']?></th>
                            <th><?php  echo $row['Paterno']?></th>
                            <th><?php  echo $row['Materno']?></th> 
                            <th><?php  echo $row['Sexo']?></th>
                            <th><?php  echo $row['FecNac']?></th>
                            <th><?php  echo $row['Edo']?></th>
                            <th><?php  echo $row['City']?></th> 
                            <th><?php  echo $row['Calle_']?></th>
                            <th><?php  echo $row['Tel']?></th>
                            <th><?php  echo $row['Correo']?></th>
                            <th><?php  echo $row['CP']?></th> 
                            <th><?php  echo $row['Puesto']?></th>
                            <th><?php  echo $row['Salario']?></th>
                            <th><?php  echo $row['Fec_Contrato']?></th> 
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
                <h1>Registre empleado</h1>
                <form action="insertar_empleado.php" method="POST">
                    <label for="Matricula">Matricula:</label>
                    <input required type="text" class="form-control mb-3" name="Matricula" placeholder="Matrícula">
                    <label for="Nom">Nombre:</label>
                    <input required type="text" class="form-control mb-3" name="Nom" placeholder="Nombre del Empleado">
                    <label for="Paterno">Apellido paterno:</label>
                    <input required type="text" class="form-control mb-3" name="Paterno" placeholder="Apellido Paterno">
                    <label for="Materno">Apellido materno:</label>
                    <input required type="text" class="form-control mb-3" name="Materno" placeholder="Apellido Materno">
                    
                    <label for="Sexo">Sexo del Empleado:</label>
                    <select class="form-control mb-3" name="Sexo">
                        <option value="H"> Hombre </option>
                        <option value="M"> Mujer </option>
                        <option value="X"> Indistinto </option>
                    </select>
                    
                    <label for="FecNac">Fecha de Nacimiento del Empleado:</label>
                    <input required type="date" class="form-control mb-3" name="FecNac"
                    min="1962-01-01" 
                    max="2004-12-31">

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
                    <label for="City">Ciudad:</label>
                    <input required type="text" class="form-control mb-3" name="City" placeholder="Ciudad">
                    <label for="Calle_">Calle:</label>
                    <input required type="text" class="form-control mb-3" name="Calle_" placeholder="Calle">
                    
                    <label for="phone"> Teléfono:</label><small> (Formato: ###-###-##-##)</small> 
                    <input required type="tel" class="form-control mb-3" id="Tel" name="Tel" placeholder="###-###-##-##" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                    
                    <label for="Correo">Correo electronico:</label>
                    <input required type="email" class="form-control mb-3" name="Correo" placeholder="Correo Electrónico">
                    <label for="CP">Código postal:</label>
                    <input required type="text" class="form-control mb-3" name="CP" placeholder="Código Postal">
                    <label for="Puesto">Puesto:</label>
                    <input required type="text" class="form-control mb-3" name="Puesto" placeholder="Puesto ">
                    <label for="Slario">Salario:</label>
                    <input required type="number" class="form-control mb-3" name="Salario" placeholder="Salario">
                                    
                    <label for="Fec_Contrato">Fecha de Contrato del Empleado:</label>
                    <input required type="date" class="form-control mb-3" name="Fec_Contrato"
                    min="1962-01-01" 
                    max=2022-11-17>
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">
                </form>
            </div>
        </div>  
    </div>

        <?php
    }
?>



    

</body>
</html>