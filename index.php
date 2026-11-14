<?php
// 1. Incluimos el archivo de la cabecera (header.php) para mantener el diseño unificado en todas las páginas
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para el contenido dinámico e independiente de la página de inicio -->
<main>

    <!-- 3. Sección de la portada o banner principal del torneo de videojuegos -->
    <section class="portada">
        <!-- 4. Contenedor interno para centrar el título y el botón de llamada a la acción -->
        <div class="portada-contenido">
            <!-- 5. Título grande de bienvenida al evento -->
            <h2>La Gran Batalla del Año</h2>
            <!-- 6. Párrafo descriptivo que invita a competir -->
            <p>Inscribe a tu equipo, demuestra tu nivel en los mejores juegos competitivos y gana increíbles premios.</p>
            <!-- 7. Botón que redirige directamente a la página de inscripción -->
            <a href="contacto.php" class="boton">¡Inscríbete Ahora!</a>
        </div>
    </section>

    <!-- 8. Sección dedicada a mostrar los juegos o categorías principales del torneo -->
    <section class="seccion-juegos">
        <!-- 9. Título de la sección -->
        <h2>Videojuegos en Competencia</h2>
        <p>Conoce las disciplinas oficiales de este torneo y prepárate para la gloria.</p>

        <!-- 10. Contenedor donde JavaScript inyectará dinámicamente las tarjetas de los juegos (similar a las pizzas del proyecto anterior) -->
        <div class="contenedor-tarjetas" id="contenedor-juegos">
            <!-- Aquí cargaremos los juegos mediante JavaScript más adelante -->
        </div>
    </section>

<!-- 11. Cerramos la etiqueta principal del contenido -->
</main>

<?php
// 12. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento
include 'footer.php';
?>