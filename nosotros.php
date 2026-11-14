<?php
// 1. Incluimos el archivo de la cabecera (header.php) para mantener la misma barra de navegación y diseño
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para el contenido independiente de la página de "Nosotros" -->
<main>

    <!-- 3. Sección de encabezado o banner secundario -->
    <section class="banner-interno">
        <div class="banner-contenido">
            <!-- 4. Título principal de la sección -->
            <h2>Sobre el Torneo Nexus eSports</h2>
            <!-- 5. Breve bajada de texto explicativa -->
            <p>Conoce nuestra historia, nuestra misión y resuelve las dudas más frecuentes sobre el torneo.</p>
        </div>
    </section>

    <!-- 6. Sección de contenido principal dividida para contar la historia -->
    <section class="seccion-nosotros">
        <!-- 7. Contenedor para alinear los bloques informativos -->
        <div class="contenedor-nosotros">

            <!-- 8. Primer bloque: Nuestra Historia -->
            <div class="bloque-info" style="margin-bottom: 3rem;">
                <h3>Nuestra Historia</h3>
                <p>Nexus eSports nació con el firme propósito de impulsar el talento competitivo en la región, creando espacios profesionales donde los videojugadores puedan demostrar su disciplina, estrategia y pasión en torneos de alto nivel.</p>
            </div>

            <!-- 9. SECCIÓN DEL ACORDEÓN DE PREGUNTAS FRECUENTES (FAQ) -->
            <div class="bloque-faq">
                <h3 style="text-align: center; margin-bottom: 2rem; color: #ffffff;">Preguntas Frecuentes (FAQ)</h3>

                <!-- Pregunta 1 del Acordeón -->
                <div class="item-acordeon">
                    <button class="pregunta-acordeon">¿Cuáles son los requisitos para inscribir a mi equipo? <span>▼</span></button>
                    <div class="respuesta-acordeon">
                        <p>Cada equipo debe contar con un mínimo de 5 jugadores titulares y opcionalmente 1 suplente, todos debidamente registrados con sus gamertags correctos en el formulario de inscripción.</p>
                    </div>
                </div>

                <!-- Pregunta 2 del Acordeón -->
                <div class="item-acordeon">
                    <button class="pregunta-acordeon">¿Cómo se realizarán las eliminatorias? <span>▼</span></button>
                    <div class="respuesta-acordeon">
                        <p>Las fases eliminatorias se jugarán de forma online mediante servidores privados, y las grandes finales se transmitirán en vivo con narración oficial.</p>
                    </div>
                </div>

                <!-- Pregunta 3 del Acordeón -->
                <div class="item-acordeon">
                    <button class="pregunta-acordeon">¿Cuál es el costo de inscripción al torneo? <span>▼</span></button>
                    <div class="respuesta-acordeon">
                        <p>La inscripción para la presente edición es totalmente gratuita gracias al patrocinio de nuestras marcas colaboradoras.</p>
                    </div>
                </div>

            </div>

        <!-- 10. Cerramos el contenedor de nosotros -->
        </div>
    </section>

<!-- 11. Cerramos la etiqueta principal -->
</main>

<?php
// 12. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento
include 'footer.php';
?>