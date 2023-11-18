<?php
if (isset($_GET["ref"])) {
    $referencia = $_GET["ref"];

    $item = mysqli_query($conn, "");

} else {
    include "paginas/tienda.php"; // Página por defecto si $_GET["pagina"] no está definida.
}
?>