<?php

$usario="u279284434_alex";
$passwd="1252208r80";
$servidor="mysql.hostinger.mx";
$BD="u279284434_pc";

/*$usario="root";
$passwd="";
$servidor="localhost";
$BD="pc_actual";
/*$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_pcatual";*/

$conexion=mysqli_connect($servidor,$usario,$passwd,$BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
