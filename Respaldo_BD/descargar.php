<?php

$host="localhost";
$user="root";
$pass="";
$bd="caña";

$fecha = date("Ymd-His");

$salida_sql = $bd.'_'.$fecha.'.sql';

$dump = "mysqldump -h$host -u$user -p$pass --opt $bd > $salida_sql";

system($dump, $output);

?>