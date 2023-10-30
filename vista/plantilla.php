<?php

//$usuarios = ctrUsuarios::ctrMostrarUsuarios();

//var_dump($usuarios);

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="Icon" href="vista/imagenes/Logos/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=""></script>
    <link rel="stylesheet" href="Js/Catalogo.js">
    <link rel="stylesheet" type="text/css" href="vista/recursos/Css/EstilosMPMCatalogo.css">
    <link rel="stylesheet" type="text/css" href="vista/recursos/Css/EstilosMPM.css">
    <link rel="stylesheet" type="text/css" href="vista/recursos/Css/EstilosMPMIndex.css">
    <title>MPM DE COLOMBIA SAS</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <?php include "modulos/header.php"; ?>

        <!-- =============================================== -->

        <?php include "modulos/redes.php"; ?>
        <!-- =============================================== -->

        <?php

         //include "paginas/principal.php";

        if (isset($_GET["pagina"])) {

            if (
                $_GET["pagina"] == "principal" ||
                $_GET["pagina"] == "catalogo"
            ) {
                include "paginas/" . $_GET["pagina"] . ".php";
            }else{
                include "paginas/principal.php"; 
            }
        }

        ?>

        <?php include "modulos/footer.php"; ?>

</body>

</html>