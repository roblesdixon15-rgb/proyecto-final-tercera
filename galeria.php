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
        <!-- 7. Contenedor para alinear y distribuir ordenadamente los elementos de la galería -->
        <div class="contenedor-galeria">

            <!-- 8. Primer elemento o tarjeta individual de la galería -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Espacio visual simulado para la primera foto del evento -->
                    <div style="background: #111; height: 200px; display: flex; align-items: center; justify-content: center; color: #00ffff; font-weight: bold;">[ Escenario Principal ]</div>
                </div>
                <p>Gran Final Presencial</p>
            </div>

            <!-- 9. Segundo elemento o tarjeta individual de la galería -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Espacio visual simulado para la segunda foto -->
                    <div style="background: #111; height: 200px; display: flex; align-items: center; justify-content: center; color: #00ffff; font-weight: bold;">[ Zona de Competencia ]</div>
                </div>
                <p>Jugadores en acción</p>
            </div>

            <!-- 10. Tercer elemento o tarjeta individual de la galería -->
            <div class="item-galeria">
                <div class="caja-imagen-galeria">
                    <!-- Espacio visual simulado para la tercera foto -->
                    <div style="background: #111; height: 200px; display: flex; align-items: center; justify-content: center; color: #00ffff; font-weight: bold;">[ Premiación ]</div>
                </div>
                <p>Entrega de trofeos</p>
            </div>

        <!-- 11. Cerramos el contenedor de la galería -->
        </div>
    </section>

<!-- 12. Cerramos la etiqueta principal del contenido -->
</main>

<?php
// 13. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento con los créditos y scripts
include 'footer.php';
?>