<?php
// class Conexion
// {
//     static public function conectar()
//     {
//         $link = new PDO("mysql:host=mpmcolombia.com;dbname=mpmcolom_From", "mpmcolom_Desarrollo", "@DesarrolloMPM2023*");
//         $link->exec("set names utf8mb4");
//         return $link;
//     }
// }

$host = "localhost";
$user = "mpmcolom_Desarrollo";
$pass = "@DesarrolloMPM2023*";
$database = "mpmcolom_From";

$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn)
{
	die("No ahi conexion:".mysqli_connect_error());
}

?>