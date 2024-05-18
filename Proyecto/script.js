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

function saber_mas_basica() {
    var z = document.getElementById("part1_basico");
    var x = document.getElementById("part2_basico");

    if (z.style.display === "block") {
        z.style.display = "none";
        x.style.display = "block";

    } else {
        z.style.display = "block";
        x.style.display = "none";
    }
  }

function saber_mas_medio() {
    var z = document.getElementById("part1_medio");
    var x = document.getElementById("part2_medio");

    if (z.style.display === "block") {
        z.style.display = "none";
        x.style.display = "block";

    } else {
        z.style.display = "block";
        x.style.display = "none";
    }
  }

  function saber_mas_superior() {
    var z = document.getElementById("part1_superior");
    var x = document.getElementById("part2_superior");

    if (z.style.display === "block") {
        z.style.display = "none";
        x.style.display = "block";

    } else {
        z.style.display = "block";
        x.style.display = "none";
    }
  }
  
  function saber_mas_especializacion() {
    var z = document.getElementById("part1_especializacion");
    var x = document.getElementById("part2_especializacion");

    if (z.style.display === "block") {
        z.style.display = "none";
        x.style.display = "block";

    } else {
        z.style.display = "block";
        x.style.display = "none";
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
