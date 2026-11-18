<?php
// 1. Incluimos el archivo de la cabecera (header.php) para que mantenga el mismo menú superior y diseño unificado
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para alojar todo el contenido independiente de la galería -->
<main>

    <!-- 3. Sección de banner o cabecera interna para darle título y contexto a la página -->
    <section class="banner-interno">
        <div class="banner-contenido">
            <!-- 4. Título principal de la sección adaptado al mundo de los eSports -->
            <h2>Galería de Momentos y Escenarios</h2>
            <!-- 5. Breve descripción de lo que el usuario va a encontrar en esta sección -->
            <p>Explora las mejores imágenes de las arenas, los equipos en competencia y las finales pasadas.</p>
        </div>
    </section>

    <!-- 6. Sección principal donde se organizará la cuadrícula con las fotografías -->
    <section class="seccion-galeria">
        <!-- 7. Contenedor para alinear y distribuir ordenadamente los elementos de la galería en formato grid -->
        <div class="contenedor-galeria">

            <!-- 8. Primer elemento o tarjeta individual de la galería: Escenario Principal -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Insertamos la etiqueta img apuntando a la foto del escenario usando la clase CSS tarjet-img para un ajuste perfecto -->
                    <img src="img/escenario.webp" alt="Escenario Principal - Gran Final Presencial" class="tarjeta-img">
                </div>
                <!-- 9. Texto descriptivo inferior que acompaña a la imagen del escenario -->
                <p>Gran Final Presencial</p>
            </div>

            <!-- 10. Segundo elemento o tarjeta individual de la galería: Zona de Competencia -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Insertamos la foto de los jugadores en acción con la ruta exacta de la carpeta img -->
                    <img src="img/zona de competencia.webp" alt="Zona de Competencia - Jugadores en acción" class="tarjeta-img">
                </div>
                <!-- 11. Texto descriptivo inferior de la zona de juego -->
                <p>Jugadores en acción</p>
            </div>

            <!-- 12. Tercer elemento o tarjeta individual de la galería: Premiación -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Insertamos la foto de la entrega de trofeos utilizando la misma clase unificada de estilos -->
                    <img src="img/premiacion.jpg" alt="Premiación - Entrega de trofeos" class="tarjeta-img">
                </div>
                <!-- 13. Texto descriptivo inferior de la premiación -->
                <p>Entrega de trofeos</p>
            </div>

        <!-- 14. Cerramos el contenedor principal de la galería -->
        </div>
    </section>

<!-- 15. Cerramos la etiqueta principal del contenido del sitio -->
</main>

<?php
// 16. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento con los créditos y enlaces
include 'footer.php';
?>