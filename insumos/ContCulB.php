<?php
function conectarCulB()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneCulB=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneCulB,$bd);
    return $coneCulB;
}
?>