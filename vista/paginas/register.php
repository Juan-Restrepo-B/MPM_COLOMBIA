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
        <h3>Tipo de Cuenta</h3>

        <input type="radio" name="typeuser" id="personaNatural" value="natural" onchange="mostrarFormularioPersona()" checked>
        <label for="personaNatural">Persona natural</label>

        <input type="radio" name="typeuser" id="personaJuridica" value="juridica" onchange="mostrarFormulario()">
        <label for="personaJuridica">Persona jurídica</label>

        <div id="formPersonaNatural" class="persona-form">
            <!-- Campos específicos para Persona Natural -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <!-- Agrega más campos según tus necesidades -->
        </div>

        <div id="formPersonaJuridica" class="juridica-form">
            <!-- Campos específicos para Persona Jurídica -->
            <label for="razonSocial">Razón Social:</label>
            <input type="text" name="razonSocial" id="razonSocial" required>
            <!-- Agrega más campos según tus necesidades -->
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