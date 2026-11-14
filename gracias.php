<?php
// 1. Incluimos el archivo de la cabecera (header.php) para mantener la misma barra de navegación y diseño
include 'header.php';
?>

<!-- 2. Abrimos la etiqueta principal para el contenido de la página de agradecimiento -->
<main>

    <!-- 3. Sección centrada para darle un mensaje claro y llamativo al usuario tras su registro -->
    <section class="seccion-gracias">
        <!-- 4. Contenedor interno para alinear los elementos visuales del mensaje -->
        <div class="contenedor-gracias" style="text-align: center; padding: 4rem 1rem;">
            
            <!-- 5. Icono o elemento visual grande celebrando la inscripción -->
            <div style="font-size: 4rem; margin-bottom: 1rem;">🎮🎉</div>

            <!-- 6. Título principal de éxito -->
            <h2>¡Inscripción Exitosa!</h2>

            <!-- 7. Mensaje explicativo informando los siguientes pasos -->
            <p>Hemos recibido los datos de tu escuadra correctamente. En las próximas horas te enviaremos un correo con el reglamento oficial, el horario de las partidas y el enlace del servidor de Discord.</p>

            <!-- 8. Espacio de separación visual -->
            <br>

            <!-- 9. Botón para que el usuario pueda regresar fácilmente a la página de inicio -->
            <a href="index.php" class="boton">Volver al Inicio</a>

        <!-- 10. Cerramos el contenedor -->
        </div>
    </section>

<!-- 11. Cerramos la etiqueta principal -->
</main>

<?php
// 12. Incluimos el archivo del pie de página (footer.php) para cerrar la estructura del documento
include 'footer.php';
?>