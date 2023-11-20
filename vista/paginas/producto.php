<?php
include("modelo/producto.modelo.php");
include("modelo/tienda.modelo.php");
?>
<style>
    .info-lista {
        display: none;
    }

    li:hover .info-lista,
    li.clicked .info-lista {
        display: block;
        position: relative;
        margin-left: 25px;
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
                                    <li>
                                        <?php echo "$familianombre"; ?>
                                    </li>
                                </a>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <div class="search-bar">
                        <form action="" method="get">
                            <input type="text" name="pagina" value="tienda" style="display:none;">
                            <input type="text" name="search" class="custom-search"
                                placeholder="Buscar por Referencia o Nombre del producto">
                            <button type="submit" class="btnsearch">Buscar</button>
                        </form>
                    </div>
                    <li class="custom-svg-car"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            viewBox="0 0 24 24" style="fill: rgba(175, 30, 47, 1);transform: ;msFilter:;">
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
<section class="custom-section-item">
    <div class="custom-item ui-pdp--relative pb-40 ui-pdp-with--separator--fluid">
        <div class="custom-item-izq">
            <div class="custom-columna-item-izq ui-pdp--relative">
                <div class="custom-columna-item-img">
                    <div class="custom-item-img">
                        <div class="custom-item-img-option ui-pdp-gallery__column">
                            <?php
                            $primerMultimedia = true; // Variable para asegurar que solo se cargue la primera imagen
                            while ($itemproducto = mysqli_fetch_assoc($item)) {
                                $multimedia_nombre = $itemproducto['multimedia_nombre'];
                                ?>
                                <a onclick="cargarEnIframe('<?php echo $multimedia_nombre; ?>')">
                                    <img src="vista/imagenes/Tienda/Productos/<?php echo $multimedia_nombre; ?>"
                                        alt="Imagen de producto">
                                </a>
                                <?php
                                if ($primerMultimedia) {
                                    // Muestra la primera imagen directamente
                                    echo '<script>window.onload = function() { cargarEnIframe("' . $multimedia_nombre . '"); }</script>';
                                    $primerMultimedia = false;
                                }
                                ?>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="custom-imagen">
                            <img id="imagenSeleccionada" alt="Imagen de producto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-item-centro">
            Importado | *CANTIDAD VEHICULO VENDIDOS*
            <h1>
                <?php echo "$nombre"; ?>
            </h1>
            *calificacion*
            <h3>$
            <?php echo number_format($precio, 0, ',', '.'); ?>
            </h3>
            Lo que tienes que saber de este producto
            <p>
                <?php echo "$descripcion"; ?>
            </p>
            <a href="">Ver caracteristicas</a>
        </div>
        <div class="custom-item-der">
            <div class="custom-img-pagos">
                <img src="vista/imagenes/Tienda/pse.jpg" alt="">
                <img src="vista/imagenes/Tienda/png-clipart-visa-visa.png" alt="">
            </div>
            <div class="custom-info-envio">
                Conoce los tiempos y las formas de envío.
                <br>
                Calcular cuándo llega
            </div>
            <div class="custom-stock">
                <input type="number">
                (
                <?php echo "$stock"; ?> Disponibles)
            </div>
            <div class="custom-option-buy">
                <button>Comprar ahora</button>
                <button>Agregar al carrito</button>
            </div>
        </div>
        <div class="custom-productos">
            Productos similares
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
    </div>
    <div class="custom-caracteristicas">
            Características de
            <?php echo "$nombre"; ?>
            <div class="custom-info-caracteristicas">
                <img src="" alt="Imagen Ficha tecnica">
            </div>
        </div>
        <div class="custom-descripcion">
            Descripción
            <?php echo "$observaciones"; ?>
        </div>
        <div class="custom-preguntas">
            Preguntas
            <br><br>
            ¿Qué quieres saber?
            <br><br>
            <a href="">Costo y tiempo de envío</a>
            <a href="">Devoluciones gratis</a>
            <a href="">Medios de pago</a>
            <a href="">Garantía</a>
            <br><br>
            <br><br>
            
            Pregúntale a MPM de Colombia
            <br>
            <input type="text" name="" id="">
            <button>Enviar</button>
        </div>
</section>

<script>
    function cargarEnIframe(imagenNombre) {
        // Actualizar la imagen en el elemento con ID "imagenSeleccionada"
        var imagenSeleccionada = document.getElementById('imagenSeleccionada');
        imagenSeleccionada.src = 'vista/imagenes/Tienda/Productos/' + imagenNombre;
        imagenSeleccionada.alt = 'Imagen de producto';
    }
</script>
<script>
    document.getElementById('producto').addEventListener('click', function () {
        this.classList.toggle('clicked');
    });
</script>