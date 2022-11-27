<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "caña";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM usuario WHERE Usuario = '".$nombre."' and Contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

while($fila=mysqli_fetch_array($query)){
	$id=$fila["idUsuario"];
	$cargo=$fila["Nivel"];
}

if($nr == 1)
{
	session_start();
	$_SESSION['id']=$id;
	$_SESSION['nivel']=$cargo;
	header("Location: pagina.php");
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}
	


?>