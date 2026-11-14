<?php
// 1. Incluimos el archivo de la cabecera (header.php) para mantener la misma barra de navegación en esta página
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para el contenido independiente de la sección de Programa -->
<main>

    <!-- 3. Sección de banner interno para contextualizar la página del programa del evento -->
    <section class="banner-interno">
        <div class="banner-contenido">
            <!-- 4. Título principal de la sección adaptado a eSports -->
            <h2>Programa y Disciplinas del Torneo</h2>
            <!-- 5. Breve descripción de los horarios y categorías de competencia -->
            <p>Consulta los juegos oficiales, las fases eliminatorias y los horarios de las grandes finales.</p>
        </div>
    </section>

    <!-- 6. Sección principal donde detallamos el itinerario o las categorías de competencia -->
    <section class="seccion-servicios">
        <!-- 7. Contenedor para ordenar las tarjetas o bloques del programa -->
        <div class="contenedor-servicios">

            <!-- 8. Primer bloque del programa: Categoría de Videojuegos de Disparos (Shooters) -->
            <div class="tarjeta-servicio">
                <h3>Competencias de Shooters</h3>
                <p>Torneos oficiales de alta intensidad táctica y precisión en modalidad por escuadras. Enfrentamientos en mapas clásicos con eliminación directa.</p>
            </div>

            <!-- 9. Segundo bloque del programa: Categoría de Juegos de Lucha o Arena -->
            <div class="tarjeta-servicio">
                <h3>Arenas de Batalla 1v1 y Multijugador</h3>
                <p>Demuestra tu dominio individual y estratégico en combates cerrados donde cada segundo y cada movimiento definen al campeón.</p>
            </div>

            <!-- 10. Tercer bloque del programa: Fase de Gran Final en Vivo -->
            <div class="tarjeta-servicio">
                <h3>Gran Final Presencial y Streaming</h3>
                <p>Las etapas definitivas se transmitirán en vivo con narradores profesionales, efectos especiales y premios en efectivo para los tres primeros lugares.</p>
            </div>

        <!-- 11. Cerramos el contenedor del programa -->
        </div>
    </section>

<!-- 12. Cerramos la etiqueta principal -->
</main>

<?php
// 13. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento
include 'footer.php';
?>