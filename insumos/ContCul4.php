<?php
function conectarCul4()
{
    $host="localhost";
    $user="root";
    $pass="";
    $bd="caña";

    $coneCul4=mysqli_connect($host,$user,$pass);
    mysqli_select_db($coneCul4,$bd);
    return $coneCul4;
}
?>