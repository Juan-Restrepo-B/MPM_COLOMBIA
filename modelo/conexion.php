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

$host = "45.169.100.168";
$user = "mpmcolom_Jrestrepo";
$pass = "J20uan.2023*";

$conn = mysqli_connect($host, $user, $pass);
if (!$conn)
{
	die("No ahi conexion:".mysqli_connect_error());
}
?>