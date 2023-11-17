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
                                <li>Información 1</li>
                                <li>Información 2</li>
                                <li>Información 3</li>
                            </ul>
                        </li>
                        <div class="search-bar"><form action="" method="get">
                            <input type="text" name="search" class="custom-search"
                                placeholder="Buscar por Referencia o Nombre del producto">
                            <button type="submit" class="btnsearch">Buscar</button>
                        </form></div>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" 
                            viewBox="0 0 24 24" style="fill: rgba(175, 30, 47, 1);transform: ;msFilter:;">
                            <path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path>
                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                            <circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
                        </li>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <div class="custom-container-tienda">
        Hola mundo
    </div>
    <script>
        document.getElementById('producto').addEventListener('click', function() {
            this.classList.toggle('clicked');
        });
    </script>
