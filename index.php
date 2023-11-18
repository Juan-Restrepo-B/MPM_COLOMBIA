<?php
session_start();

include "controlador/plantilla.controlador.php";
//include "controlador/usuarios.controlador.php";

include "modelo/tienda.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
    
?>

