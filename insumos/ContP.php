<?php
function conectarP()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneP=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneP,$bd);
    return $coneP;
}
?>