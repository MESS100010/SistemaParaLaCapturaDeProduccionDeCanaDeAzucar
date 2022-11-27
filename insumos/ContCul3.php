<?php
function conectarCul3()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneCul3=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneCul3,$bd);
    return $coneCul3;
}
?>