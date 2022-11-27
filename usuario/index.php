<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Registrar usuario!</h1>
    	<input type="text" name="nombre" placeholder="Nombre(s)">
    	<input type="text" name="ap" placeholder="Apellido paterno">
		<input type="text" name="am" placeholder="Apellido materno">

		<label for="Nivel">Nivel:</label><br>
        <select name="Nivel">
            <option value="Administrador"> Administrador </option>
            <option value="Ejidatario"> Ejidatario </option>
            <option value="Jefe de campo"> Jefe de campo </option>
        </select>

		<input type="text" name="usuario" placeholder="Nombre de usuario">
		<input type="password" name="pass" placeholder="Contraseña">

    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>