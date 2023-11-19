<?php
$referencia = isset($_GET['search']) ? $_GET['search'] : '';

$item = mysqli_query($conn, "SELECT 
producto_nombre, producto_descripcion, producto_precio,
producto_stock,producto_observaciones, multimedia_nombre, 
multimedia_contenido, familia_nombre, subfamilia_nombre
FROM mpmcolom_Pruebas.pd_productos pp
INNER JOIN mpmcolom_Pruebas.pd_multimedias pm 
ON pp.producto_idinterna = pm.multimedia_idproducto
INNER JOIN mpmcolom_Pruebas.td_familia tf
ON pp.producto_idfamilia = tf.idfamilia
INNER JOIN mpmcolom_Pruebas.un_producto_subfamilia ups 
ON pp.producto_idinterna = ups.unionproducto_idproducto 
INNER JOIN mpmcolom_Pruebas.td_subfamilia ts 
ON ts.idsubfamilia = ups.unionproducto_idsubfamilia
WHERE producto_idexterna = '$referencia';");
?>