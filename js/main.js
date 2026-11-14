// ==========================================
// SCRIPT PRINCIPAL - TORNEO DE ESPORTS
// ==========================================

document.addEventListener('DOMContentLoaded', () => {

    // 1. Control del Menú Hamburguesa para Dispositivos Móviles
    const botonHamburguesa = document.getElementById('hamburguesa');
    const navMenu = document.getElementById('nav-menu');

    if (botonHamburguesa && navMenu) {
        botonHamburguesa.addEventListener('click', () => {
            navMenu.classList.toggle('activo');
            botonHamburguesa.classList.toggle('activo');
        });
    }

   // 2. Generación Dinámica de Tarjetas de Videojuegos
    const juegosTorneo = [
        {
            titulo: "GTA VI",
            descripcion: "Competencia de velocidad y misiones contrarreloj en las calles de Vice City.",
            premio: "Premio: $1,500 USD",
            imagen: "/proyectos/proyecto final tercera/img/juego1.jpg"
        },
        {
            titulo: "God of War Ragnarök",
            descripcion: "Combates cerrados de habilidad, reflejos y estrategia pura en la arena 1v1.",
            premio: "Premio: $800 USD",
            imagen: "/proyectos/proyecto final tercera/img/juego2.jpg"
        },
        {
            titulo: "Zelda: ocarina of Time",
            descripcion: "Supervivencia y exploración táctica en un entorno abierto desafiante.",
            premio: "Premio: $2,000 USD",
            imagen: "/proyectos/proyecto final tercera/img/juego3.jpg"
        }
    ];

    const contenedorJuegos = document.getElementById('contenedor-juegos');

    if (contenedorJuegos) {
        contenedorJuegos.innerHTML = "";

        juegosTorneo.forEach(juego => {
            const tarjeta = document.createElement('div');
            tarjeta.className = 'tarjeta-juego';

            tarjeta.innerHTML = `
                <img src="${juego.imagen}" alt="${juego.titulo}" class="tarjeta-img">
                <div class="tarjeta-info">
                    <h3>${juego.titulo}</h3>
                    <p>${juego.descripcion}</p>
                    <span class="etiqueta-premio">${juego.premio}</span>
                </div>
            `;

            contenedorJuegos.appendChild(tarjeta);
        });
    }

    // 3. Controlador del Acordeón de Preguntas Frecuentes (Modo Exclusivo: solo una abierta a la vez)
    const botonesAcordeon = document.querySelectorAll('.pregunta-acordeon');

    if (botonesAcordeon.length > 0) {
        botonesAcordeon.forEach(boton => {
            boton.addEventListener('click', () => {
                const itemActual = boton.parentElement;
                const estaActivo = itemActual.classList.contains('activo');

                // Cerramos todos los elementos del acordeón
                const todosLosItems = document.querySelectorAll('.item-acordeon');
                todosLosItems.forEach(item => {
                    item.classList.remove('activo');
                });

                // Si el elemento no estaba activo, lo abrimos exclusivamente
                if (!estaActivo) {
                    itemActual.classList.add('activo');
                }
            });
        });
    }

});