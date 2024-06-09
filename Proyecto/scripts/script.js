// script.js

// Variables para controlar el carrusel de imágenes
var currentSlide = 0; // Índice de la diapositiva actual

// Función para mostrar la diapositiva en el índice especificado
function showSlide(index) {
    var slides = document.getElementsByClassName("slide"); // Obtiene todas las diapositivas
    if (index >= slides.length) currentSlide = 0; // Si el índice supera el número de diapositivas, vuelve a la primera
    if (index < 0) currentSlide = slides.length - 1; // Si el índice es menor que 0, va a la última diapositiva

    // Oculta todas las diapositivas
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Muestra la diapositiva actual
    slides[currentSlide].style.display = "block";
}

// Función para mostrar la siguiente diapositiva
function nextSlide() {
    showSlide(currentSlide += 1); // Incrementa el índice y muestra la siguiente diapositiva
}

// Función para mostrar la diapositiva anterior
function prevSlide() {
    showSlide(currentSlide -= 1); // Decrementa el índice y muestra la diapositiva anterior
}

// Configura los eventos una vez que el contenido del documento ha sido cargado
document.addEventListener('DOMContentLoaded', function() {
    showSlide(currentSlide); // Muestra la diapositiva inicial
    document.getElementById("prevSlide").addEventListener('click', prevSlide); // Asocia la función prevSlide al botón de diapositiva anterior
    document.getElementById("nextSlide").addEventListener('click', nextSlide); // Asocia la función nextSlide al botón de siguiente diapositiva
});

// Variables y funciones para mostrar/ocultar el menú de navegación
let menuVisible = false;
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList = ""; // Oculta el menú
        menuVisible = false;
    }else{
        document.getElementById("nav").classList = "responsive"; // Muestra el menú
        menuVisible = true;
    }
}

// Función para ocultar el menú cuando se selecciona una opción
function seleccionar(){
    document.getElementById("nav").classList = "";
    menuVisible = false;
}

// Función para alternar el modo oscuro
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode'); // Cambia entre los modos claro y oscuro
    var button = document.getElementById('toggleDarkMode');
    if (document.body.classList.contains('dark-mode')) {
        button.textContent = 'Modo Claro'; // Cambia el texto del botón a "Modo Claro" si está en modo oscuro
    } else {
        button.textContent = 'Modo Oscuro'; // Cambia el texto del botón a "Modo Oscuro" si está en modo claro
    }
}

// Asocia la función toggleDarkMode al botón correspondiente
document.getElementById('toggleDarkMode').addEventListener('click', toggleDarkMode);

// Función para desplazamiento suave cuando se hace clic en un enlace
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Previene el comportamiento por defecto del enlace
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth' // Desplazamiento suave hacia la sección correspondiente
        });
    });
});

// Función para alternar la visualización de más información en secciones
function saber_mas(sectionId) {
    var part1 = document.getElementById(`part1_${sectionId}`);
    var part2 = document.getElementById(`part2_${sectionId}`);

    if (part1.style.display === "block") {
        part1.style.display = "none"; // Oculta la primera parte y muestra la segunda
        part2.style.display = "block";
    } else {
        part1.style.display = "block"; // Muestra la primera parte y oculta la segunda
        part2.style.display = "none";
    }
}

// Configura la validación del formulario de contacto una vez que el contenido del documento ha sido cargado
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formContacto").addEventListener('submit', validarFormulario);
});

// Función para validar el formulario de contacto
function validarFormulario(event) {
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;

    var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/; // Expresión regular para validar el email
    var validTelefono = /^\d{9}$/; // Expresión regular para validar el teléfono

    // Verifica si el email y el teléfono son válidos
    if (validEmail.test(email) && validTelefono.test(telefono)) {
        this.submit(); // Si la validación es exitosa, envía el formulario
    } else {
        if (!validEmail.test(email)) {
            event.preventDefault();
            document.getElementById('emailLabel').innerHTML = 'Introduzca un email válido'; // Muestra un mensaje de error para el email
            document.getElementById('emailLabel').style.color = 'red';
        }
        if (!validTelefono.test(telefono)) {
            event.preventDefault();
            document.getElementById('telefonoLabel').innerHTML = 'Introduzca un teléfono válido'; // Muestra un mensaje de error para el teléfono
            document.getElementById('telefonoLabel').style.color = 'red';
        }
    }
}
