<?php
function conectarEB()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneEB=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneEB,$bd);
    return $coneEB;
}
?>