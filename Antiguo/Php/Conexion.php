<?php

$host = "mpmcolombia.com";
$user = "mpmcolom_Desarrollo";
$pass = "@DesarrolloMPM2023*";
$database = "mpmcolom_From";

$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn)
{
	die("No ahi conexion:".mysqli_connect_error());
}
?>