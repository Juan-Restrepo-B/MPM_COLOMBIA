<?php

include("modelo/conexion.php");

$productos = mysqli_query($conn, "SELECT * FROM mpmcolom_Pruebas.pd_productos pp 
INNER JOIN mpmcolom_Pruebas.pd_multimedias pm 
ON pp.producto_idinterna = pm.multimedia_idproducto;");

$familia = mysqli_query($conn, "SELECT * FROM mpmcolom_Pruebas.td_familia;");

?>