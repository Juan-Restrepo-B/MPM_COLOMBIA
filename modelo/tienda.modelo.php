<?php

include("modelo/conexion.php");

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$searchFam = isset($_GET['familia']) ? $_GET['familia'] : '';

$sql = "SELECT
pp.producto_idexterna,
pp.producto_idinterna,
pp.producto_nombre,
MIN(pm.multimedia_nombre) AS multimedia_nombre,
MIN(pm.multimedia_contenido) AS multimedia_contenido
FROM
mpmcolom_Pruebas.pd_productos pp
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

else {
    $sql .= " GROUP BY pp.producto_idinterna, pp.producto_nombre";
}
$productos = mysqli_query($conn, $sql);

$familia = mysqli_query($conn, "SELECT * FROM mpmcolom_Pruebas.td_familia ORDER BY familia_nombre ASC;");

?>