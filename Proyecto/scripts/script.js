let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}

// Función para alternar el modo oscuro
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    var button = document.getElementById('toggleDarkMode');
    if (document.body.classList.contains('dark-mode')) {
        button.textContent = 'Modo Claro';
    } else {
        button.textContent = 'Modo Oscuro';
    }
}

document.getElementById('toggleDarkMode').addEventListener('click', toggleDarkMode);


// Desplazamiento suave cuando pinchas en el enlace
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function saber_mas(sectionId) {
    var part1 = document.getElementById(`part1_${sectionId}`);
    var part2 = document.getElementById(`part2_${sectionId}`);

    if (part1.style.display === "block") {
        part1.style.display = "none";
        part2.style.display = "block";
    } else {
        part1.style.display = "block";
        part2.style.display = "none";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formContacto").addEventListener('submit', validarFormulario);
});
function validarFormulario(event) {
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;

	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    var validTelefono = /^\d{9}$/;

    if (validEmail.test(email) && validTelefono.test(telefono)) {
        // Si la validación es exitosa, envía el formulario
        this.submit();
    } else {
        if (!validEmail.test(email)) {
            event.preventDefault()
            document.getElementById('emailLabel').innerHTML = 'Introduzca un email válido';
            document.getElementById('emailLabel').style.color = 'red';
        }
        if (!validTelefono.test(telefono)) {
            event.preventDefault()
            document.getElementById('telefonoLabel').innerHTML = 'Introduzca un teléfono válido';
            document.getElementById('telefonoLabel').style.color = 'red';
        }
    }
}
