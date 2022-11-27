<?php
function conectarC()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $conec=mysqli_connect($host,$user,$pass);
    mysqli_select_db($conec,$bd);
    return $conec;
}
?>