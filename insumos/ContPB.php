<?php
function conectarPB()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $conePB=mysqli_connect($host,$user,$pass);
    mysqli_select_db($conePB,$bd);
    return $conePB;
}
?>