<!-- 1. Indicamos al navegador que este documento es una página web moderna con HTML5 -->
<!DOCTYPE html>

<!-- 2. Abrimos la etiqueta principal de la página y configuramos el idioma en español ("es") -->
<html lang="es">

<!-- 3. Abrimos la sección de "cabeza", donde van configuraciones invisibles para el usuario pero vitales para el navegador -->
<head>

    <!-- 4. Definimos la codificación de caracteres a UTF-8 para que aceptemos eñes, tildes y símbolos raros sin errores -->
    <meta charset="UTF-8">

    <!-- 5. Hacemos que la página sea responsiva (Mobile First): se adapte perfectamente a celulares, tablets y computadoras -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 6. Ponemos el título que aparecerá arriba en la pestaña del navegador -->
    <title>Torneo Nexus eSports 2026</title>

    <!-- 7. Vinculamos nuestra hoja de estilos en CSS para que la página tenga color, diseño y acomodo visual -->
    <link rel="stylesheet" href="css/estilos.css">

<!-- 8. Cerramos la sección de configuración (head) -->
</head>

<!-- 9. Abrimos el cuerpo (body), que es todo el contenido visible que el usuario va a ver en pantalla -->
<body>

    <!-- 10. Creamos la caja contenedora principal para la barra de navegación de arriba -->
    <header class="header-principal">

        <!-- 11. Una caja interna para alinear y centrar el contenido del menú de forma ordenada -->
        <div class="contenedor-nav">

            <!-- 12. Una cajita exclusiva para la zona del logotipo de la página -->
            <div class="logo">

                <!-- 13. El título principal del logo con el nombre del torneo y una palabra estilizada -->
                <h1>🎮 Nexus <span>eSports</span></h1>

            <!-- 14. Cerramos la caja del logotipo -->
            </div>

            <!-- 15. El botón del menú hamburguesa que aparecerá únicamente cuando se vea en teléfonos celulares -->
            <div class="hamburguesa" id="hamburguesa">

                <!-- 16, 17, 18. Las tres rayitas horizontales que forman las líneas gráficas del botón hamburguesa -->
                <span></span>
                <span></span>
                <span></span>

            <!-- 19. Cerramos la caja del botón hamburguesa -->
            </div>

            <!-- 20. La caja que contiene la lista de enlaces del menú de navegación con su respectivo ID de control -->
            <nav class="nav-menu" id="nav-menu">

                <!-- 21. Enlace que te lleva a la página de inicio -->
                <a href="index.php">Inicio</a>

                <!-- 22. Enlace que te lleva a la página de información del torneo (nosotros) -->
                <a href="nosotros.php">Nosotros</a>

                <!-- 23. Enlace que te lleva al programa de actividades (que antes llamábamos servicios en la pizzería) -->
                <a href="servicios.php">Programa</a>

                <!-- 24. Enlace que te lleva al formulario de inscripción (que antes llamábamos contacto) -->
                <a href="contacto.php">Inscripción</a>

                <!-- 25. Enlace que te lleva a la galería de fotos del torneo -->
                <a href="galeria.php">Galería</a>


            <!-- 25. Cerramos la caja de la barra de navegación -->
            </nav>

        <!-- 26. Cerramos el contenedor interno del menú -->
        </div>

    <!-- 27. Cerramos la caja de la cabecera principal -->
    </header>