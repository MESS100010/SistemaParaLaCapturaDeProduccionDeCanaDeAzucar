<?php
function conectarUB()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneUB=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneUB,$bd);
    return $coneUB;
}
?>