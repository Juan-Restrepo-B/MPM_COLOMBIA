<?php

include("modelo/conexion.php");

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$searchFam = isset($_GET['familia']) ? $_GET['familia'] : '';

$sql = "SELECT * FROM mpmcolom_Pruebas.pd_productos pp 
        INNER JOIN mpmcolom_Pruebas.pd_multimedias pm ON pp.producto_idinterna = pm.multimedia_idproducto
        WHERE 1"; // 1 es verdadero para simplificar la construcción de la consulta

if (!empty($searchTerm)) {
    $sql .= " AND (pp.producto_idinterna LIKE '%$searchTerm%' OR
               pp.producto_idexterna LIKE '%$searchTerm%' OR
               pp.producto_nombre LIKE '%$searchTerm%')";
}

if (!empty($searchFam)) {
    $sql .= " AND pp.producto_idfamilia LIKE '%$searchFam%'";
}

$productos = mysqli_query($conn, $sql);

$familia = mysqli_query($conn, "SELECT * FROM mpmcolom_Pruebas.td_familia ORDER BY familia_nombre ASC;");

?>