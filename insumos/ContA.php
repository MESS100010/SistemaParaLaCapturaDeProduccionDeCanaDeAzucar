<?php
function conectarA()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneA=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneA,$bd);
    return $coneA;
}
?>