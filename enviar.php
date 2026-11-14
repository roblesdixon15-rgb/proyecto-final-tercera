<?php
// 1. Abrimos la etiqueta de código PHP para procesar la lógica del servidor
// (Nota: este archivo no lleva header ni footer porque actúa "tras bambalinas" recibiendo los datos)

// 2. Verificamos mediante una condición si los datos fueron enviados utilizando el método POST (por seguridad)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Recogemos y limpiamos el dato del nombre del equipo enviado desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);

    // 4. Recogemos y limpiamos el dato del correo electrónico
    $correo = htmlspecialchars($_POST['correo']);

    // 5. Recogemos la categoría del videojuego seleccionada
    $juego = htmlspecialchars($_POST['juego']);

    // 6. Recogemos la lista de los jugadores (gamertags) ingresada en el textarea
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // 7. Aquí podrías programar la función mail() de PHP si quisieras enviar un correo real, 
    // pero para fines prácticos del proyecto académico, simularemos el éxito del registro.

    // 8. Redirigimos automáticamente al usuario hacia la página de "gracias.php" una vez procesados los datos
    header("Location: gracias.php");
    
    // 9. Detenemos la ejecución del script para asegurar que la redirección se complete correctamente
    exit();

// 10. Si alguien intenta entrar a este archivo directamente por la URL sin llenar el formulario...
} else {
    
    // 11. Lo regresamos a la página de inscripción por seguridad
    header("Location: contacto.php");
    exit();
}
?>