<?php
// 1. Incluimos el archivo de la cabecera (header.php) para mantener la misma barra de navegación y diseño en esta página
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para el contenido independiente de la página de inscripción -->
<main>

    <!-- 3. Sección de banner interno para contextualizar la página de registro al torneo -->
    <section class="banner-interno">
        <div class="banner-contenido">
            <!-- 4. Título principal de la sección adaptado a inscripciones -->
            <h2>Inscripción de Equipos y Jugadores</h2>
            <!-- 5. Breve descripción que anima a los usuarios a registrarse -->
            <p>Llena el formulario con los datos de tu escuadra y asegura tu lugar en la competencia.</p>
        </div>
    </section>

    <!-- 6. Sección principal donde se ubicará el formulario de contacto/inscripción -->
    <section class="seccion-contacto">
        <!-- 7. Contenedor para centrar y ordenar el formulario -->
        <div class="contenedor-contacto">

            <!-- 8. Formulario web que enviará los datos introducidos por el usuario al archivo "enviar.php" usando el método POST por seguridad -->
            <form action="enviar.php" method="POST" class="formulario-inscripcion">
                
                <!-- 9. Título interno del formulario -->
                <h3>Formulario de Registro</h3>
                <p>Completa los campos para procesar tu cupo en el torneo.</p>

                <!-- 10. Contenedor para el campo del nombre del equipo o capitán -->
                <div class="campo-formulario">
                    <label for="nombre">Nombre del Equipo / Capitán:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ej. Team Nexus">
                </div>

                <!-- 11. Contenedor para el correo electrónico de contacto -->
                <div class="campo-formulario">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required placeholder="correo@ejemplo.com">
                </div>

                <!-- 12. Contenedor para seleccionar el videojuego en el que van a participar -->
                <div class="campo-formulario">
                    <label for="juego">Selecciona el Videojuego:</label>
                    <select id="juego" name="juego" required>
                        <option value="">-- Elige una categoría --</option>
                        <option value="shooter">Shooter Táctico (Squads)</option>
                        <option value="arena">Arena de Batalla (1v1 / Multijugador)</option>
                        <option value="batalla">Battle Royale</option>
                    </select>
                </div>

                <!-- 13. Contenedor para comentarios adicionales o lista de suplentes -->
                <div class="campo-formulario">
                    <label for="mensaje">Lista de Jugadores (Gamertags):</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe los nicks o IDs de los integrantes de tu equipo..."></textarea>
                </div>

                <!-- 14. Botón de envío del formulario para procesar la inscripción -->
                <button type="submit" class="boton">Enviar Inscripción</button>

            <!-- 15. Cerramos la etiqueta del formulario -->
            </form>

        <!-- 16. Cerramos el contenedor del formulario -->
        </div>
    </section>

<!-- 17. Cerramos la etiqueta principal -->
</main>

<?php
// 18. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento
include 'footer.php';
?>