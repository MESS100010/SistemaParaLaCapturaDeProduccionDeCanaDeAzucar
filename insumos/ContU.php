<?php
function conectarU()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneU=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneU,$bd);
    return $coneU;
}
?>