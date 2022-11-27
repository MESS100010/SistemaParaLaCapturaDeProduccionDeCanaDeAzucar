<?php 
    include("conexion.php");
    $con=conectar();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RESPORTES POR CULTIVO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="../img/icono.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    /*flotantes*/
    .button22 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
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
    <br>
    <?php
    session_start();
    //echo "usuario: '$_SESSION[id]' y cargo: '$_SESSION[nivel]'";
    ?>
    <h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>
    <?php
    if($_SESSION["nivel"] == "jefe de campo"){
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
<?php
    }else if($_SESSION["nivel"] == "ejidatario"){
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
            <li><a href="../Respaldo_BD/php/index.php">Respaldo base de datos</a></li></section>
            <li><a class="active" href="../iniciar sesión\login.html">Cerrar sesión</a></li> 
        </ul>
        <?php
    }
?>
    <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>REPORTES DE CULTIVOS</h3>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <form method="post" action="cultivo.php">
        <label>Mostrar cultivos:</label>
            <select class="form-control mb-3" name="OpcionFiltro">
                <option value="Iniciado">Iniciado</option>
                <option value="Sembrado">Sembrado</option>
                <option value="Finalizado">Finalizado</option>
                <option value="Todos">Todos</option>
            </select>
            <button type="submit" class="button button22">Mostrar</button>
        <br>
        </form> 
    </div>
    <?php
    //$opcion=$_POST['OpcionFiltro'];
    if($_POST['OpcionFiltro']=="Iniciado"){
    $sql="SELECT * FROM cultivo where Progreso = 'Iniciado'";
    $query=mysqli_query($con,$sql);
?>
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
                            $num=0;
                            while($row=mysqli_fetch_array($query)){
                            $num=$num + 1;
                        ?>
                        <form action="archivo.php" method="post">  
                        <tr>
                            <th><input type="hidden" name="id" value="<?php echo $row['idCultivo']?>"></th>
                            <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['FechaI']?></th>
                            <th><?php  echo $row['FechaC']?></th>
                            <th><?php  echo $row['idCampo']?></th>
                            <th><?php  echo $row['Notas']?></th> 
                            <th><?php  echo $row['Progreso']?></th>
                        </tr>
                        </form>
                        <?php 
                        }
                        echo "Se encontraron: $num cultivos iniciados";
                        ?>
                    </tbody>
        </table>
    </div>
<?php
    }if($_POST['OpcionFiltro']=='Sembrado'){
        $sql="SELECT * FROM cultivo where Progreso = 'Sembrado'";
        $query=mysqli_query($con,$sql);
    ?>
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
                                $num=0;
                                while($row=mysqli_fetch_array($query)){
                                $num=$num + 1;
                            ?>
                            <form action="archivo.php" method="post">  
                            <tr>
                                <th><input type="hidden" name="id" value="<?php echo $row['idCultivo']?>"></th>
                                <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                                <th><?php  echo $row['idCultivo']?></th>
                                <th><?php  echo $row['FechaI']?></th>
                                <th><?php  echo $row['FechaC']?></th>
                                <th><?php  echo $row['idCampo']?></th>
                                <th><?php  echo $row['Notas']?></th> 
                                <th><?php  echo $row['Progreso']?></th>
                            </tr>
                            </form>
                            <?php 
                            }
                            echo "Se encontraron: $num cultivos sembrados";
                            ?>
                        </tbody>
            </table>
        </div>
    <?php
        }if($_POST['OpcionFiltro']=='Finalizado'){
            $sql="SELECT * FROM cultivo where Progreso = 'Finalizado'";
            $query=mysqli_query($con,$sql);
        ?>
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
                                    $num=0;
                                    while($row=mysqli_fetch_array($query)){
                                    $num=$num + 1;
                                ?>
                                <form action="archivo.php" method="post">  
                                <tr>
                                    <th><input type="hidden" name="id" value="<?php echo $row['idCultivo']?>"></th>
                                    <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                                    <th><?php  echo $row['idCultivo']?></th>
                                    <th><?php  echo $row['FechaI']?></th>
                                    <th><?php  echo $row['FechaC']?></th>
                                    <th><?php  echo $row['idCampo']?></th>
                                    <th><?php  echo $row['Notas']?></th> 
                                    <th><?php  echo $row['Progreso']?></th>
                                </tr>
                                </form>
                                <?php 
                                }
                                echo "Se encontraron: $num cultivos finalizados";
                                ?>
                            </tbody>
                </table>
            </div>
        <?php
            }
            if($_POST['OpcionFiltro']=='Todos'){
                $sql="SELECT * FROM cultivo";
                $query=mysqli_query($con,$sql);
            ?>
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
                                        $num=0;
                                        while($row=mysqli_fetch_array($query)){
                                        $num=$num + 1;
                                    ?>
                                    <form action="archivo.php" method="post">  
                                    <tr>
                                        <th><input type="hidden" name="id" value="<?php echo $row['idCultivo']?>"></th>
                                        <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                                        <th><?php  echo $row['idCultivo']?></th>
                                        <th><?php  echo $row['FechaI']?></th>
                                        <th><?php  echo $row['FechaC']?></th>
                                        <th><?php  echo $row['idCampo']?></th>
                                        <th><?php  echo $row['Notas']?></th> 
                                        <th><?php  echo $row['Progreso']?></th>
                                    </tr>
                                    </form>
                                    <?php 
                                    }
                                    echo "Se encontraron: $num cultivos en total";
                                    ?>
                                </tbody>
                    </table>
                </div>
            <?php
                }
            ?>

<div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>REPORTES DE PRODUCTOS</h3>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <form method="post" action="cultivo.php">
        <label>Mostrar productos:</label>
            <select class="form-control mb-3" name="OpcionFiltroP">
                <option value="Liquido">Liquido</option>
                <option value="Solido">Solido</option>
                <option value="Todos">Todos</option>
            </select>
            <button type="submit" class="button button22">Mostrar</button>
        <br>
        </form> 
    </div>
    <?php
    //$opcion=$_POST['OpcionFiltro'];
    if($_POST['OpcionFiltroP']=="Liquido"){
    $sql="SELECT * FROM producto where Consistencia = 'Liquido'";
    $query=mysqli_query($con,$sql);
?>
    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Consistencia</th>
                    <th>Peso_Kg</th>
                    <th>Peso_L</th>
                    <th>Cantidad</th>
                    <th>Fecha de Vigencia</th>
                    <th>Precio Unitario</th>
                    <th>Precio Mayoreo</th>
                    <th>Marca</th>
                </tr>
            </thead>
                    <tbody>
                        <?php
                            $num=0;
                            while($row=mysqli_fetch_array($query)){
                            $num=$num + 1;
                        ?>
                        <form action="archivoP.php" method="post">  
                        <tr>
                            <th><input type="hidden" name="id" value="<?php echo $row['idProducto']?>"></th>
                            <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                            <th><?php  echo $row['idProducto']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Categoria']?></th>
                            <th><?php  echo $row['Consistencia']?></th> 
                            <th><?php  echo $row['Peso_Kg']?></th>
                            <th><?php  echo $row['Peso_L']?></th>
                            <th><?php  echo $row['Cantidad']?></th>
                            <th><?php  echo $row['FechaVigencia']?></th> 
                            <th><?php  echo $row['PrecioUnitario']?></th>
                            <th><?php  echo $row['PrecioMayoreo']?></th>
                            <th><?php  echo $row['Marca']?></th> 
                        </tr>
                        </form>
                        <?php 
                        }
                        echo "Se encontraron: $num productos liquidos";
                        ?>
                    </tbody>
        </table>
    </div>
<?php
    }if($_POST['OpcionFiltroP']=="Solido"){
        $sql="SELECT * FROM producto where Consistencia = 'Solido'";
    $query=mysqli_query($con,$sql);
?>
    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Consistencia</th>
                    <th>Peso_Kg</th>
                    <th>Peso_L</th>
                    <th>Cantidad</th>
                    <th>Fecha de Vigencia</th>
                    <th>Precio Unitario</th>
                    <th>Precio Mayoreo</th>
                    <th>Marca</th>
                </tr>
            </thead>
                    <tbody>
                        <?php
                            $num=0;
                            while($row=mysqli_fetch_array($query)){
                            $num=$num + 1;
                        ?>
                        <form action="archivoP.php" method="post">  
                        <tr>
                            <th><input type="hidden" name="id" value="<?php echo $row['idProducto']?>"></th>
                            <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                            <th><?php  echo $row['idProducto']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Categoria']?></th>
                            <th><?php  echo $row['Consistencia']?></th> 
                            <th><?php  echo $row['Peso_Kg']?></th>
                            <th><?php  echo $row['Peso_L']?></th>
                            <th><?php  echo $row['Cantidad']?></th>
                            <th><?php  echo $row['FechaVigencia']?></th> 
                            <th><?php  echo $row['PrecioUnitario']?></th>
                            <th><?php  echo $row['PrecioMayoreo']?></th>
                            <th><?php  echo $row['Marca']?></th> 
                        </tr>
                        </form>
                        <?php 
                        }
                        echo "Se encontraron: $num productos liquidos";
                            ?>
                        </tbody>
            </table>
        </div>
    <?php
        }if($_POST['OpcionFiltroP']=="Todos"){
            $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);
?>
    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Consistencia</th>
                    <th>Peso_Kg</th>
                    <th>Peso_L</th>
                    <th>Cantidad</th>
                    <th>Fecha de Vigencia</th>
                    <th>Precio Unitario</th>
                    <th>Precio Mayoreo</th>
                    <th>Marca</th>
                </tr>
            </thead>
                    <tbody>
                        <?php
                            $num=0;
                            while($row=mysqli_fetch_array($query)){
                            $num=$num + 1;
                        ?>
                        <form action="archivoP.php" method="post">  
                        <tr>
                            <th><input type="hidden" name="id" value="<?php echo $row['idProducto']?>"></th>
                            <th><button type="submit" class="btn btn-danger">PDF</button></th> 
                            <th><?php  echo $row['idProducto']?></th>
                            <th><?php  echo $row['Codigo']?></th>
                            <th><?php  echo $row['Categoria']?></th>
                            <th><?php  echo $row['Consistencia']?></th> 
                            <th><?php  echo $row['Peso_Kg']?></th>
                            <th><?php  echo $row['Peso_L']?></th>
                            <th><?php  echo $row['Cantidad']?></th>
                            <th><?php  echo $row['FechaVigencia']?></th> 
                            <th><?php  echo $row['PrecioUnitario']?></th>
                            <th><?php  echo $row['PrecioMayoreo']?></th>
                            <th><?php  echo $row['Marca']?></th> 
                        </tr>
                        </form>
                        <?php 
                        }
                        echo "Se encontraron: $num productos liquidos";
                                ?>
                            </tbody>
                </table>
            </div>
        <?php
            }
            ?>

<div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>REPORTES DE EMPLEADOS</h3>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <form method="post" action="cultivo.php">
        <label>Mostrar empleados:</label>
            <select class="form-control mb-3" name="OpcionFiltroE">
                <option value="H">Hombre</option>
                <option value="M">Mujer</option>
                <option value="Todos">Todos</option>
            </select>
            <button type="submit" class="button button22">Mostrar</button>
        <br>
        </form> 
    </div>
    <?php
    //$opcion=$_POST['OpcionFiltro'];
    if($_POST['OpcionFiltroE']=="H"){
    $sql="SELECT * FROM empleado where Sexo = 'H'";
    $query=mysqli_query($con,$sql);
?>
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
                            $num=0;
                            while($row=mysqli_fetch_array($query)){
                            $num=$num + 1;
                        ?>
                        <form action="archivoE.php" method="post">  
                        <tr>
                            <th><input type="hidden" name="id" value="<?php echo $row['idEmpleado']?>"></th>
                            <th><button type="submit" class="btn btn-danger">PDF</button></th> 
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
                        </form>
                        <?php 
                        }
                        echo "Se encontraron: $num empleados hombre";
                        ?>
                    </tbody>
        </table>
    </div>
<?php
    }if($_POST['OpcionFiltroE']=="M"){
        $sql="SELECT * FROM empleado where Sexo = 'M'";
        $query=mysqli_query($con,$sql);
    ?>
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
                                $num=0;
                                while($row=mysqli_fetch_array($query)){
                                $num=$num + 1;
                            ?>
                            <form action="archivoE.php" method="post">  
                            <tr>
                                <th><input type="hidden" name="id" value="<?php echo $row['idEmpleado']?>"></th>
                                <th><button type="submit" class="btn btn-danger">PDF</button></th> 
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
                            </form>
                            <?php 
                            }
                            echo "Se encontraron: $num empleados mujer";
                            ?>
                        </tbody>
            </table>
        </div>
    <?php
        }if($_POST['OpcionFiltroE']=="Todos"){
            $sql="SELECT * FROM empleado";
            $query=mysqli_query($con,$sql);
        ?>
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
                                    $num=0;
                                    while($row=mysqli_fetch_array($query)){
                                    $num=$num + 1;
                                ?>
                                <form action="archivoE.php" method="post">  
                                <tr>
                                    <th><input type="hidden" name="id" value="<?php echo $row['idEmpleado']?>"></th>
                                    <th><button type="submit" class="btn btn-danger">PDF</button></th> 
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
                                </form>
                                <?php 
                                }
                                echo "Se encontraron: $num empleados totales";
                                ?>
                            </tbody>
                </table>
            </div>
        <?php
            }
            ?>

</body>
</html>