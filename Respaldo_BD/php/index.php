<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../../img/icono.png">
	<title>Respaldo base de datos</title>
</head>
<style>
   .buttonA {
  display: inline-block;
  border-radius: 4px;
  background-color: #165733;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.buttonA span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonA span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonA:hover span {
  padding-right: 25px;
}

.buttonA:hover span:after {
  opacity: 1;
  right: 0;
}

.button22 {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
        /* float: right; */
        }
        .button22:hover {
        background-color: #4CAF50;
        color: white;
        }
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
</style>
<body>

<h1 class="b"><center>CAÑA DE AZÚCAR</center></h1>

<ul>                               
            <li><a class="activar" href="../../CRUD_usuario\usuario.php">Usuarios</a></li>
            <li><a class="active" href="../../CRUD_empleado\empleado.php">Empleados</a></li>
            <li><a class="active" href="../../CRUD_campo\campo.php">Campos</a></li>
            <li><a class="active" href="../../CRUD_producto\producto.php">Productos</a></li>
            <li><a class="active" href="../../CRUD_actividad\actividad.php">Actividades</a></li>
            <li><a class="active" href="../../CRUD_cultivo\cultivo.php">Cultivos</a></li>
            <li><a class="active" href="../../Reportes/cultivo.php">Resportes Cultivos</a></li>
            <li><a class="activar" href="../../Respaldo_BD/php/index.php">Respaldo base de datos</a></li>
        </ul>

	<center>
	<br><br><br>
	<button class="buttonA" style="vertical-align:middle" onclick="location.href='./Backup.php'"><span> Descargar </span></button><br><br><br><br>
	</center>
	<form action="./Restore.php" method="POST">
		<center><label>Selecciona un punto de restauración</label><br>
		<select name="restorePoint">
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				include_once './Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select></center>
		<center>
		<br><br>
		<button class="buttonA" style="vertical-align:middle" type="submit"><span> Cargar </span></button><br>
		</center>
	</form>
</body>
</html>