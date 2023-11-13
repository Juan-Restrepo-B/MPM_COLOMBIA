<header>
    <nav>
        <ul>
            <div class="content_menu">
                <div class="list">
                    <li><a href="?pagina=principal"><img src="vista/imagenes/Logos/cropped-LOGOMPM-150x150-1.png"
                                alt=""></a></li>
                    <li><a class='active' href="?pagina=principal">HOME</a></li>
                    <li><a href="?pagina=catalogo">CATALOGO</a></li>
                    <li><a href="?pagina=tienda">TIENDA</a></li>
                </div>
                <div class="list2">
                    <li class="custom-usuario" >
                        <?php
                        if (isset($_SESSION['usuario'])) {
                                ?>
                                <img src="" alt="">
                                <h5>Juan Restrepo</h5>
                                <p>Ver perfil</p>
                            <?php
                        } else {
                            ?>
                            <a href="?pagina=logging" style="text-decoration: none; font-size: 1.8rem;">
                                Iniciar Sesion</a>
                            <?php
                        }
                        ?>
                    </li>
                </div>
            </div>
        </ul>
    </nav>
</header>