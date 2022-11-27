<?php
function conectarAB()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneAB=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneAB,$bd);
    return $coneAB;
}
?>