<?php
session_start();

include "controlador/plantilla.controlador.php";
//include "controlador/usuarios.controlador.php";

//include "modelo/usuarios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
    
?>

