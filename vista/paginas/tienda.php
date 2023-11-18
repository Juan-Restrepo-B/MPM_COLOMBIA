<?php
include "modelo/tienda.modelo.php";
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .info-lista {
        display: none;
    }

    li:hover .info-lista,
    li.clicked .info-lista {
        display: block;
    }
</style>
<header>
    <nav>
        <ul>
            <div class="content_menu-tienda">
                <div class="custom-list-tienda">
                    <li id="producto">Productos
                        <ul class="info-lista">
                            <?php
                            while ($row = mysqli_fetch_array($familia)) {
                                $idfamilia = $row['idfamilia'];
                                $familianombre = $row['familia_nombre'];
                                ?>
                                <a href="?pagina=tienda&familia=<?php echo "$idfamilia"; ?>">
                                    <li><?php echo "$familianombre"; ?></li>
                                </a>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <div class="search-bar">
                        <form action="" method="get">
                            <input type="text" name="search" class="custom-search"
                                placeholder="Buscar por Referencia o Nombre del producto">
                            <button type="submit" class="btnsearch">Buscar</button>
                        </form>
                    </div>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            style="fill: rgba(175, 30, 47, 1);transform: ;msFilter:;">
                            <path
                                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z">
                            </path>
                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                            <circle cx="17.5" cy="19.5" r="1.5"></circle>
                        </svg>
                    </li>
                </div>
            </div>
        </ul>
    </nav>
</header>
<div class="custom-container-tienda">
    <section class="custom-section-portada">
        <div class="custom-portada">
            <div class="custom-portada-izquierda">
                <video src="vista/imagenes/Tienda/videoMPM.mp4"></video>
            </div>
            <div class="custom-portada-central">
                <img src="vista/imagenes/Tienda/Feria_Bogota3.jpeg" alt="Foto del Stand Feria">
            </div>
            <div class="custom-portada-derecha">
                <img src="vista/imagenes/Tienda/Feria_Bogota3.jpeg" alt="">
                <img src="vista/imagenes/Tienda/Feria_Bogota3.jpeg" alt="">
            </div>
        </div>
    </section>
    <section class="custom-section-info">
        <div class="custom-info">
            <a href="">
                <div class="custom-contenido-info">
                    <div class="custom-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:; height: 100%;">
                            <path
                                d="M20 4H4c-1.103 0-2 .897-2 2v2h20V6c0-1.103-.897-2-2-2zM2 18c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6H2v6zm3-3h6v2H5v-2z">
                            </path>
                        </svg></div>
                    <h3>PAGA TU FACTURA DE MANERA RAPIDA Y FACIL</h3>
                </div>
            </a>
            <a href="">
                <div class="custom-contenido-info">
                    <div class="custom-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:; height: 100%;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg></div>
                    <h3>EJECUTIVOS COMERCIALES ESPECIALIZADOS </h3>
                </div>
            </a>
            <a href="">
                <div class="custom-contenido-info">
                    <div class="custom-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="fill: rgba(239, 25, 35, 1);transform: ;msFilter:; height: 100%;">
                            <path
                                d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM8.715 8c1.151 0 2 .849 2 2s-.849 2-2 2-2-.849-2-2 .848-2 2-2zm3.715 8H5v-.465c0-1.373 1.676-2.785 3.715-2.785s3.715 1.412 3.715 2.785V16zM19 15h-4v-2h4v2zm0-4h-5V9h5v2z">
                            </path>
                        </svg></div>
                    <h3>PAGA TU FACTURA DE MANERA RAPIDA Y FACIL</h3>
                </div>
            </a>
        </div>
    </section>
    <section class="custom-section-producto">
        <h1>PRODUCTOS</h1>
        <div class="custom-productos">
            <?php
            while ($row = mysqli_fetch_array($productos)) {
                $productoref = $row['producto_idexterna'];
                $productonombre = $row['producto_nombre'];
                $productoimg = $row['multimedia_nombre'];
                ?>
                <a href="?pagina=producto&ref=<?php echo "$productoref"; ?>">
                    <div class="custom-elemto-producto">
                        <img src="vista/imagenes/Tienda/Productos/<?php echo "$productoimg"; ?>" alt="Imagen de producto">
                        <h2>
                            <?php echo "$productonombre"; ?>
                        </h2>
                        <p>Ver Productro</p>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
</div>
<script>
    document.getElementById('producto').addEventListener('click', function () {
        this.classList.toggle('clicked');
    });
</script>