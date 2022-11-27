<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM cultivo";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CULTIVO REGISTROS</title>
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
<br>
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
    }
?>

    <div class="col-md-8">
        <table class="table" >
            <tr>
                <th>
                <h3>CULTIVO INSUMOS</h3>
                </th>
            </tr>
        </table>
    </div>

    <?php 
    include("ContEB.php");
    $coneEB=conectarEB();
    $sqlEB="SELECT * FROM Emp_Cult";
    $queryEB=mysqli_query($coneEB,$sqlEB);
?>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <h5>Empleados</h5>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>Id</th>
                    <th>Id cultivo</th>
                    <th>Id empleado</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($queryEB)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_empleado.php?id=<?php echo $row['idEC'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_empleado.php? id=<?php echo $row['idEC'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idEC']?></th>
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['idEmpleado']?></th>
                            
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>

    <?php 
    include("ContPB.php");
    $conePB=conectarPB();
    $sqlPB="SELECT * FROM Prod_Cult";
    $queryPB=mysqli_query($conePB,$sqlPB);
?>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <h5>Productos</h5>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>Id</th>
                    <th>Id cultivo</th>
                    <th>Id productos</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($queryPB)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_producto.php?id=<?php echo $row['idPC'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_producto.php? id=<?php echo $row['idPC'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idPC']?></th>
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['idProducto']?></th>
                            
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>

    <?php 
    include("ContAB.php");
    $coneAB=conectarAB();
    $sqlAB="SELECT * FROM Act_Cult";
    $queryAB=mysqli_query($coneAB,$sqlAB);
?>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <h5>Actividades</h5>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>Id</th>
                    <th>Id cultivo</th>
                    <th>Id actividad</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($queryAB)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_actividad.php?id=<?php echo $row['idAC'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_actividad.php? id=<?php echo $row['idAC'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idAC']?></th>
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['idActividad']?></th>
                            
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>

    <?php 
    include("ContUB.php");
    $coneUB=conectarUB();
    $sqlUB="SELECT * FROM Usuario_Cult";
    $queryUB=mysqli_query($coneUB,$sqlUB);
?>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <h5>Usuarios</h5>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th>Id</th>
                    <th>Id cultivo</th>
                    <th>Id usuario</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($queryUB)){
                        ?>
                        <tr>
                            
                            <th><a href="actualizar_usuario.php?id=<?php echo $row['idUC'] ?>" class="btn btn-info"> Editar</a></th>
                            <th><a href="eliminar_usuario.php? id=<?php echo $row['idUC'] ?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger">Eliminar</a></th>   
                            <th><?php  echo $row['idUC']?></th>
                            <th><?php  echo $row['idCultivo']?></th>
                            <th><?php  echo $row['idUsuario']?></th>
                            
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
        </table>
    </div>

    <center><h3>INSERTAR INSUMOS</h3></center>
    <div class="container mt-5">
        <div class="row"> 
        <h1>Registre los empleados</h1>
                <form action="insertar_empleadosC.php" method="POST">
                            
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
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
                      
            </div>
        </div>  
    </div>

    <div class="container mt-5">
        <div class="row"> 
        <h1>Registre productos</h1>
                <form action="insertar_productosC.php" method="POST">
                            
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
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
                      
            </div>
        </div>  
    </div>

    <div class="container mt-5">
        <div class="row"> 
        <h1>Registre actividades</h1>
                <form action="insertar_actividadesC.php" method="POST">
                            
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
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
                      
            </div>
        </div>  
    </div>

    <div class="container mt-5">
        <div class="row"> 
        <h1>Registre usuarios</h1>
                <form action="insertar_usuariosC.php" method="POST">
                            
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
                    
                    <input type="submit" class="btn btn-primary">
                    <input type="reset"  class="btn btn-primary">

                </form>
                      
            </div>
        </div>  
    </div>

</body>
</html>