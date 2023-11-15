<style>
    .juridica-form {
        display: none;
    }
</style>

<div class="custom-contenedor-formulario custom-contenedor">
    <div class="custom-imagen-formulario"></div>
    <form action="" class="custom-formulario" id="registroForm">
        <div class="custom-texto-formulario">
            <h2>Bienvenidos</h2>
            <p>Crea tu cuenta</p>
        </div>
        <h3 class="custom-h3" >Tipo de Cuenta</h3>
        <div class="custom-option">
            <div class="custom-columna">
                <input type="radio" name="typeuser" id="personaNatural" value="natural" onchange="mostrarFormularioPersona()" checked>
                <label for="personaNatural">Persona natural</label>
            </div>
            <div class="custom-columna">
                <input type="radio" name="typeuser" id="personaJuridica" value="juridica" onchange="mostrarFormulario()">
                <label for="personaJuridica">Persona jurídica</label>
            </div>
        </div>
        <div id="formPersonaNatural" class="persona-form">
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div class="custom-columna">
                    <label for="">Apellido:</label>
                    <input type="text" name="" id="" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="">Tipo documento:</label>
                    <select name="" id="">
                        <option>Seleccione una opción</option>
                        <option value="C">Cedula de Ciudadania</option>
                        <option value="E">Cedula de Extranjeria</option>
                        <option value="D">DNI</option>
                    </select>
                </div>
                <div class="custom-columna">
                    <label for="numeroDocumento">Nro documento:</label>
                    <input type="text" id="numeroDocumento" name="numeroDocumento" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="">Correo Electronico:</label>
                    <input type="email" name="" id="" required>
                </div>
                <div class="custom-columna">
                    <label for="">telefono:</label>
                    <input type="text" name="" id="" inputmode="numeric" pattern="[0-9]*" 
                    title="Por favor, ingrese solo números" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="">Usuario:</label>
                    <input type="text" name="" id="" required>
                </div>
                <div class="custom-columna">
                    <label for="">Contraseña:</label>
                    <input type="password" name="" id="" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna custom-file">
                    <label for="">Rut</label>
                    <input type="file" name="" id="" required>
                </div>
            </div>
        </div>
        <div id="formPersonaJuridica" class="juridica-form">
        <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="nombre">Empresa:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
            </div>
            <div class=" ocultar">
                <label for="">.</label>
                <select name="" id="">
                    <option value="N">NIT</option>
                </select>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="numeroDocumento">Nit:</label>
                    <input type="text" id="numeroDocumento" name="numeroDocumento" inputmode="numeric" pattern="[0-9]*" 
                    title="Por favor, ingrese solo números" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="">Correo Electronico:</label>
                    <input type="email" name="" id="" required>
                </div>
                <div class="custom-columna">
                    <label for="">Telefono:</label>
                    <input type="text" name="" id="" inputmode="numeric" pattern="[0-9]*" 
                    title="Por favor, ingrese solo números" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna">
                    <label for="">Usuario:</label>
                    <input type="text" name="" id="" required>
                </div>
                <div class="custom-columna">
                    <label for="">Contraseña:</label>
                    <input type="password" name="" id="" required>
                </div>
            </div>
            <div class="custom-input-persona">
                <div class="custom-columna custom-file">
                    <label for="">Rut</label>
                    <input type="file" name="" id="" required>
                </div>
                <div class="custom-columna custom-file">
                    <label for="">Camara Comercio</label>
                    <input type="file" name="" id="" required>
                </div>
            </div>
        </div>
        </div>

        <!-- Otros campos generales del formulario -->
        <input type="submit" value="Enviar">
    </form>
</div>

<script>
    function mostrarFormulario() {
        // Ocultar todos los formularios
        document.querySelectorAll('.persona-form').forEach(form => form.style.display = 'none');

        // Mostrar el formulario correspondiente a la opción seleccionada
        const typeuser = document.querySelector('input[name="typeuser"]:checked').value;
        const formId = 'formPersona' + typeuser.charAt(0).toUpperCase() + typeuser.slice(1);
        document.getElementById(formId).style.display = 'block';
    }
    function mostrarFormularioPersona() {
        // Ocultar todos los formularios
        document.querySelectorAll('.juridica-form').forEach(form => form.style.display = 'none');

        // Mostrar el formulario correspondiente a la opción seleccionada
        const typeuser = document.querySelector('input[name="typeuser"]:checked').value;
        const formId = 'formPersona' + typeuser.charAt(0).toUpperCase() + typeuser.slice(1);
        document.getElementById(formId).style.display = 'block';
    }
</script>