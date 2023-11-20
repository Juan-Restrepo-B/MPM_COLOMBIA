<?php

include("modelo/conexion.php");

$referencia = isset($_GET['ref']) ? $_GET['ref'] : '';

$item = mysqli_query($conn, "SELECT 
producto_nombre, producto_descripcion, producto_precio,
producto_stock, producto_observaciones, multimedia_nombre, 
multimedia_contenido, familia_nombre, subfamilia_nombre,
idmultimedia
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

if ($item) {

    $itemproducto = mysqli_fetch_assoc($item);

    $productoimg = $itemproducto['multimedia_nombre'];
    $nombre = $itemproducto['producto_nombre'];
    $descripcion = $itemproducto['producto_descripcion'];
    $observaciones = $itemproducto['producto_observaciones'];
    $precio = $itemproducto['producto_precio'];
    $stock = $itemproducto['producto_stock'];
    
} else {
    echo "No se encontró ningún producto";
}

?>