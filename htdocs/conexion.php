<?php

$hostname="localhost";
$database="id16948214_gestionpersonal";
$username="id16948214_grupodirac";
$password="BV3b?pwm%JI3K/mj";

$conexion = new mysqli($hostname,$username,$password,$database);
if ( $conexion -> connect_errno ){
	echo "lo sentimos, el sitio web está experimentando problemas";
}

?>
