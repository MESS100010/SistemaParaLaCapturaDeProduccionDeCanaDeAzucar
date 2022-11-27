<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['Nivel']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['pass']) >= 1) {
	    
		$Nombre = trim($_POST['nombre']);
	    $Ap = trim($_POST['ap']);
	    $Am = trim($_POST['am']);
		$nivel = trim($_POST['Nivel']);
		$Usuario = trim($_POST['usuario']);
		$Contraseña = trim($_POST['pass']);

	    $consulta = "INSERT INTO usuario(Nombre,Ap,Am,Nivel,Usuario,Contraseña) VALUES ('$Nombre','$Ap','$Am','$nivel','$Usuario','$Contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>