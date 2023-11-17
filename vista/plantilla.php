<?php

//$usuarios = ctrUsuarios::ctrMostrarUsuarios();

//var_dump($usuarios);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="Icon" href="vista/imagenes/Logos/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="vista/recursos/Css/General.css">
        <!-- <link rel="stylesheet" href="Js/Catalogo.js"> -->
    <title>MPM DE COLOMBIA SAS</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <?php include "modulos/header.php"; ?>

        <!-- =============================================== -->

        <?php include "modulos/redes.php"; ?>

        <!-- =============================================== -->

        <?php

        if (isset($_GET["pagina"])) {
            $paginasPermitidas = ["principal", "catalogo", "nosotros", "marcas_alidas",
            "contactenos", "logging", "register", "tienda"];
            $paginaSolicitada = $_GET["pagina"];

            if (in_array($paginaSolicitada, $paginasPermitidas)) {
                include "paginas/$paginaSolicitada.php";
            } else {
                include "paginas/principal.php"; // Página por defecto si la solicitud no coincide con las permitidas.
            }
        } else {
            include "paginas/principal.php"; // Página por defecto si $_GET["pagina"] no está definida.
        }

        ?>

        <!-- =============================================== -->

        <?php include "modulos/footer.php"; ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="vista/recursos/Js/Nosotros.js"></script>

</html>