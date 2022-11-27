<?php
function conectarE()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneE=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneE,$bd);
    return $coneE;
}
?>