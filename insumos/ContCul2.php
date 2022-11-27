<?php
function conectarCul2()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneCul2=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneCul2,$bd);
    return $coneCul2;
}
?>