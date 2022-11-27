<?php
function conectarCul()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneCul=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneCul,$bd);
    return $coneCul;
}
?>