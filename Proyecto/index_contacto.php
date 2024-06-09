<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

require_once("sesiones.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Enrique Ruiz" />
    <meta name="description" content="Desarrollar una Landing Page adaptable para promover los cursos de informática del IES Kursaal, estimulando el interés y facilitando la inscripción." />
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TFG</title>
    <link rel="stylesheet" href="styles/stylesheet-principal.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="https://ieskursaal.es/"><img src="assets/logo-ies-kursaal.png" width="80px"></a>
            </div>
            <!-- Botón para cambiar el modo -->
            <button id="toggleDarkMode" class="toggle-dark-mode">Modo Oscuro</button>

            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#cursos" onclick="seleccionar()">CURSOS</a></li>
                    <li><a href="#razones" onclick="seleccionar()">POR QUÉ ELEGIRNOS</a></li>
                    <li><a href="#valoraciones" onclick="seleccionar()">VALORACIONES</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                    <li><a href="login.php" onclick="seleccionar()">LOGIN</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="assets/kursaal-inicio-hero.jpeg" alt="">
            </div>
            <h1>IES KURSAAL</h1>
            <h2>Cultivando el conocimiento desde hace más de un siglo</h2>
            <div class="redes">
                <a href="https://www.facebook.com/institutokursaal/"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ieskursaal/"><i class="fa-brands fa-instagram"></i></a>

            </div>
        </div>
        <a href="#cursos" class="abajo">
            <i class="fa-solid fa-angles-down"></i>
        </a>
    </section>

        <!-- SECCION CURSOS -->
    <section id="cursos" class="cursos">
        <!--Basica-->
        <div class="contenedor-seccion" >
            <div class="basica" class="animate-on-scroll">
                <h2>FP Básica: Informática y Comunicaciones</h2>
                <div class="contenedor">
                    <div class="contenido">
                        <div id="part1_basico" style="display: block;">
                            <h3>Aprendizaje</h3>

                            <ul>
                                <li class="li_curso">Acopiar los materiales para montaje y mantenimiento en sistemas microinformáticos y redes de transmisión de datos.</li>
                                <li class="li_curso">Realizar operaciones auxiliares de montaje de sistemas microinformáticos y dispositivos auxiliares con calidad.</li>
                                <li class="li_curso">Realizar operaciones auxiliares de mantenimiento y reparación de sistemas microinformáticos garantizando su funcionamiento.</li>
                                <li class="li_curso">Realizar operaciones para el almacenamiento y transporte de sistemas, periféricos y consumibles con criterios de seguridad.</li>
                                <li class="li_curso">Realizar comprobaciones rutinarias de verificación en el montaje y mantenimiento de sistemas y/o instalaciones.</li>
                                <li class="li_curso">Montar canalizaciones para cableado de datos en condiciones de calidad y seguridad.</li>
                                <li class="li_curso">Tender el cableado de redes de datos aplicando técnicas y procedimientos normalizados.</li>
                                <li class="li_curso">Manejar herramientas del entorno usuario proporcionadas por el sistema operativo y dispositivos de almacenamiento de información.</li>
                                <li class="li_curso">Manejar aplicaciones ofimáticas de procesador de textos para realizar documentos sencillos.</li>
                                <li class="li_curso">Resolver problemas predecibles relacionados con su entorno social y productivo utilizando elementos proporcionados por ciencias aplicadas y sociales.</li>
                                <li class="li_curso">Ejercer de manera activa y responsable los derechos y deberes derivados de su actividad profesional y su condición de ciudadano.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li class="li_curso">Montaje y mantenimiento de sistemas y componentes informáticos.</li>
                                <li class="li_curso">Operaciones auxiliares para la configuración y la explotación.</li>
                                <li class="li_curso">Equipos eléctricos y electrónicos.</li>
                                <li class="li_curso">Instalación y mantenimiento de redes para transmisión de datos.</li>
                                <li class="li_curso">Ciencias aplicadas I.</li>
                                <li class="li_curso">Ciencias aplicadas II.</li>
                                <li class="li_curso">Comunicación y sociedad I.</li>
                                <li class="li_curso">Comunicación y sociedad II.</li>
                                <li class="li_curso">Formación en centros de trabajo</li>
                            </ul>
                        </div>
                        <div id="part2_basico" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p>El acceso a los ciclos de Formación Profesional Básica requerirá el cumplimiento simultáneo de las siguientes condiciones:</p>
                            <ul>
                                <li class="li_curso">Tener cumplidos quince años, o cumplirlos durante el año natural en curso, y no superar los diecisiete años de edad en el momento del acceso o durante el año natural en curso</li>
                                <li class="li_curso">Haber cursado el primer ciclo de Educación Secundaria Obligatoria o, excepcionalmente, haber cursado el segundo curso de la Educación Secundaria Obligatoria.</li>
                                <li class="li_curso">Haber propuesto el equipo docente a los padres, madres o tutores legales la incorporación del alumno o alumna a un ciclo de Formación Profesional Básica.</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <p>Ejercer la activividad por cuenta ajena en empresas dedicadas a la comercialización, montaje, mantenimiento y reparación de sistemas microinformáticos, equipos eléctricos o electrónicos y en empresas que utilicen sistemas informáticos, para su gestión.</p>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="assets/fpBasica.jpeg">
                    </div>
                </div>
                <button onclick="saber_mas('basico')">
                    Saber más  
                    <span class="overlay"></span>
                </button>
                 
            </div>
        </div>
        <!--Medio-->
        <div class="contenedor-seccion">
            <div class="medio" class="animate-on-scroll">
                <h2>Grado Medio: Sistemas Microinformáticos y redes</h2>
                <!-- Contenido de la sección medio -->
                <div class="contenedor">
                    <div class="imagen">
                        <img src="assets/GM.jpg">
                    </div>
                    <div class="contenido">
                        <div id="part1_medio" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li class="li_curso">Instalar y configurar software básico y de aplicación, redes locales cableadas, inalámbricas o mixtas y conectadas a redes públicas.</li>
                                <li class="li_curso">Instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</li>
                                <li class="li_curso">Montar y configurar ordenadores y periféricos.</li>
                                <li class="li_curso">Determinar la logística asociada a las operaciones de instalación, configuración y mantenimiento de sistemas microinformáticos.</li>
                                <li class="li_curso">Diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales.</li>
                                <li class="li_curso">Replantear el cableado y la electrónica de redes locales en pequeños entornos y su conexión con redes de área extensa.</li>
                                <li class="li_curso">Ejecutar procedimientos establecidos de recuperación de datos y aplicaciones ante fallos y pérdidas de datos en el sistema.</li>
                                <li class="li_curso">Elaborar documentación técnica y administrativa del sistema, elaborar presupuestos y asesorar al cliente.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li class="li_curso">Montaje y mantenimiento de equipo.</li>
                                <li class="li_curso">Sistemas operativos monopuesto.</li>
                                <li class="li_curso">Aplicaciones ofimáticas.</li>
                                <li class="li_curso">Formación y orientación laboral.</li>
                                <li class="li_curso">Redes locales.</li>
                                <li class="li_curso">Seguridad informática.</li>
                                <li class="li_curso">Servicios en red.</li>
                                <li class="li_curso">Aplicaciones web.</li>
                                <li class="li_curso">Sistemas operativos en red.(1)</li>
                                <li class="li_curso">Empresa e iniciativa emprendedora</li>
                                <li class="li_curso">Formación en centros de trabajo</li>
                            </ul>
                        </div>
                        <div id="part2_medio" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Acceso directo:</strong></p>
                            <ul>
                                <li class="li_curso">Estar en posesión del<strong> título de Graduado en Educación Secundaria Obligatoria</strong> o de un nivel académico superior.</li>
                                <li class="li_curso">Estar en posesión de un Título Profesional Básico (Formación Profesional Básica).</li>
                                <li class="li_curso">Estar en posesión de un título de Técnico o de Técnico Auxiliar o equivalente a efectos académicos.</li>
                                <li class="li_curso">Haber superado el segundo curso del Bachillerato Unificado y Polivalente (BUP).</li>
                                <li class="li_curso">Haber superado la prueba de acceso a la Universidad para mayores de 25 años.</li>
                            </ul>
                            <p><strong>Acceso mediante prueba:</strong></p>
                            <ul>
                                <li class="li_curso">Haber superado la prueba de acceso a ciclos formativos de grado medio (se requerirá tener, al menos, diecisiete años, cumplidos en el año de realización de la prueba).</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <ul>
                                <li class="li_curso">Instalador-reparador de equipos informáticos.</li>
                                <li class="li_curso">Técnico de soporte informático.</li>
                                <li class="li_curso">Técnico de redes de datos.</li>
                                <li class="li_curso">Reparador de periféricos de sistemas microinformáticos.</li>
                                <li class="li_curso">Comercial de microinformática.</li>
                                <li class="li_curso">Operador de tele-asistencia.</li>
                                <li class="li_curso">Operador de sistemas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="saber_mas('medio')">
                    Saber más  
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
        <!--Superior-->
        <div class="contenedor-seccion">
            <div class="superior" class="animate-on-scroll">
                <!-- Contenido de la sección superior -->
                <h2>Grado Superior: Desarrollo de aplicaciones web</h2>
                <div class="contenedor">
                    <div class="contenido">
                        <div id="part1_superior" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li class="li_curso">Configurar y explotar sistemas informáticos, adaptando la configuración lógica del sistema según las necesidades de uso y los criterios establecidos.</li>
                                <li class="li_curso">Aplicar técnicas y procedimientos relacionados con la seguridad en sistemas, servicios y aplicaciones, cumpliendo el plan de seguridad.</li>
                                <li class="li_curso">Gestionar servidores de aplicaciones adaptando su configuración en cada caso para permitir el despliegue de aplicaciones web.</li>
                                <li class="li_curso">Gestionar bases de datos, interpretando su diseño lógico y verificando integridad, consistencia, seguridad y accesibilidad de los datos.</li>
                                <li class="li_curso">Desarrollar aplicaciones web con acceso a bases de datos utilizando lenguajes, objetos de acceso y herramientas de mapeo adecuados a las especificaciones.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li class="li_curso">Sistemas informaticos.</li>
                                <li class="li_curso">Base de datos.</li>
                                <li class="li_curso">Programación.</li>
                                <li class="li_curso">Lenguajes de marcas y sistemas de gestión de información.</li>
                                <li class="li_curso">Entornos de desarrollo.</li>
                                <li class="li_curso">Desarrollo web en entorno cliente.</li>
                                <li class="li_curso">Desarrollo web en entorno servidor.</li>
                                <li class="li_curso">Despliegue de aplicaciones web.</li>
                                <li class="li_curso">Diseño de interfaces web.</li>
                                <li class="li_curso">Proyecto de desarrollo de aplicaciones web.</li>
                                <li class="li_curso">Formación y orientación laboral.</li>
                                <li class="li_curso">Empresa e iniciativa emprendedora.</li>
                                <li class="li_curso">Formación en centros de trabajo.</li>
                                <li class="li_curso">Formación en centros de trabajo.</li>
                                <li class="li_curso">Horas de libre configuración.</li>
                            </ul>
                        </div>
                        <div id="part2_superior" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Requisitos de acceso:</strong>Para acceder a los ciclos formativos de grado superior se requerirá una de las siguientes condiciones:</p>
                            <ol>
                                <li class="li_curso">Estar en posesión de, al menos, uno de los siguientes títulos:
                           <ol>
                                <li class="li_curso">Título de Bachiller.</li>
                                <li class="li_curso">Título de Técnico de Grado Medio de Formación Profesional.</li>
                                <li class="li_curso">Título de Técnico Superior de Formación Profesional.</li>
                                <li class="li_curso">Título de grado universitario.</li>
                           </ol>
                           </li>
                                <li class="li_curso">Haber superado una prueba de acceso a ciclos formativos de grado superior y tener diecinueve años como mínimo, cumplidos en el año de realización de la prueba, o haber superado la prueba de acceso a la universidad para mayores de 25 años.</li>
                                <li class="li_curso">Haber superado un curso de formación específico preparatorio para el acceso a ciclos formativos de grado superior en centros públicos o privados autorizados por la administración educativa, tener diecinueve años como mínimo, cumplidos en el año de realización del curso.</li>
                           </ol>
                        </br>
                            <h3>Salida Laboral</h3>
                            <p>Las personas con este perfil profesional ejercen su actividad en empresas o entidades públicas o privadas tanto por cuenta ajena como propia, desempeñando su trabajo en el área de desarrollo de aplicaciones informáticas relacionadas con entornos Web (intranet, extranet e internet). 
                            </p>
                            <p>
                            Las ocupaciones y puestos de trabajo más relevantes son: </br>
                                – Programador Web. </br>
                                – Programador Multimedia. </br>
                                – Desarrollador de aplicaciones en entornos Web.
                            </p>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="assets/GS.png">
                    </div>
                </div>
                <button onclick="saber_mas('superior')">
                    Saber más  
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
        <!--Especialización-->
        <div class="contenedor-seccion">
            <div class="especializacion" class="animate-on-scroll">
                <!-- Contenido de la sección especialización -->
                <h2>Especialización: Ciberseguridad</h2>
                <div class="contenedor">
                    <div class="imagen">
                        <img src="assets/ciberseguridad.jpeg">
                    </div>
                    <div class="contenido">
                        <div id="part1_especializacion" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li class="li_curso">Elaborar e implementar planes de prevención y concienciación en ciberseguridad en la organización, aplicando la normativa vigente.</li>
                                <li class="li_curso">Detectar e investigar incidentes de ciberseguridad, documentándolos e incluyéndolos en los planes de securización de la organización.</li>
                                <li class="li_curso">Diseñar planes de securización contemplando las mejores prácticas para el bastionado de sistemas y redes.</li>
                                <li class="li_curso">Diseñar y administrar sistemas informáticos en red y aplicar las políticas de seguridad establecidas, garantizando la funcionalidad requerida con un nivel de riesgo controlado.</li>
                                <li class="li_curso">Analizar el nivel de seguridad requerido por las aplicaciones y los vectores de ataque más habituales, evitando incidentes de ciberseguridad.</li>
                                <li class="li_curso">Implantar sistemas seguros de despliegue de software con la adecuada coordinación entre los desarrolladores y los responsables de la operación del software.</li>
                                <li class="li_curso">Realizar análisis forenses informáticos analizando y registrando la información relevante relacionada.</li>
                                <li class="li_curso">Detectar vulnerabilidades en sistemas, redes y aplicaciones, evaluando los riesgos asociados.</li>
                                <li class="li_curso">Definir y aplicar procedimientos para el cumplimiento normativo en materia de ciberseguridad y de protección de datos personales, implementándolos tanto internamente como en relación con terceros.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li class="li_curso">Incidentes de ciberseguridad.</li>
                                <li class="li_curso">Bastionado de redes y sistemas.</li>
                                <li class="li_curso">Puesta en producción segura.</li>
                                <li class="li_curso">Análisis forense informático.</li>
                                <li class="li_curso">Hacking ético.</li>
                                <li class="li_curso">Normativa de ciberseguridad.</li>
                            </ul>
                        </div>
                        <div id="part2_especializacion" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Los títulos que dan acceso a este curso de especialización son los siguientes:</strong></p>
                            <ul>
                                <li class="li_curso">Título de Técnico Superior en Administración de Sistemas Informáticos en Red establecido por el Real Decreto 1629/2009, de 30 de octubre.</li>
                                <li class="li_curso">Título de Técnico Superior en Desarrollo de Aplicaciones Multiplataforma, establecido por el Real Decreto 450/2010, de 16 de abril.</li>
                                <li class="li_curso">Título de Técnico Superior en Desarrollo de Aplicaciones Web, establecido por el Real Decreto 686/2010, de 20 de mayo.</li>
                                <li class="li_curso">Título de Técnico Superior en Sistemas de Telecomunicaciones e Informáticos, establecido por el Real Decreto 883/2011, de 24 de junio.</li>
                                <li class="li_curso">Título de Técnico Superior en Mantenimiento Electrónico establecido por el Real Decreto 1578/2011, de 4 de noviembre</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <p>Este profesional ejercerá su actividad en entidades de los sectores donde sea necesario establecer mecanismos y medidas para la protección de los sistemas de información y redes de comunicaciones, trabajando como:</p>
                            <ul>
                                <li class="li_curso">Experto/a en ciberseguridad.</li>
                                <li class="li_curso">Auditor/a de ciberseguridad.</li>
                                <li class="li_curso">Consultor/a de ciberseguridad.</li>
                                <li class="li_curso">Hacker ético.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="saber_mas('especializacion')">
                    Saber más 
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
    </section>
    

    <!-- SECCION Por que estudiar con nosotros -->
    <section class="razones" id="razones">
        <div class="contenido-seccion">
            <h2>Por qué estudiar con nosotros</h2>
            <br>    

            <p class="texto_razones">El Instituto de Educación Secundaria (IES) Kursaal se sitúa como un faro de aprendizaje, orientando a los jóvenes hacia un futuro brillante. Con una rica historia en la enseñanza y un compromiso de excelencia, es reconocido por su ambiente de aprendizaje estimulante y respetuoso.</br></br>
            En IES Kursaal, los estudiantes son el corazón de todo lo que hacemos. Nuestro currículo integral y actualizado garantiza que cada alumno adquiera las habilidades y conocimientos necesarios para prosperar en el siglo XXI. Nuestro personal docente, altamente calificado y dedicado, trabaja incansablemente para garantizar el éxito de cada estudiante.</br></br>
            Con un enfoque claro en la innovación, el IES Kursaal fomenta el pensamiento crítico, la creatividad y la resolución de problemas a través de su amplia gama de asignaturas. Nuestro instituto promueve el desarrollo personal de los estudiantes, fomentando valores como la responsabilidad, la tolerancia y el respeto.</br></br>
            En el IES Kursaal creemos firmemente en la importancia de la comunidad. Fomentamos la participación activa de los padres y las familias, creando una red de apoyo sólida y duradera que respalda a cada uno de nuestros estudiantes. En el IES Kursaal, formamos más que estudiantes: construimos el futuro.</br>
            </p>

            <div class="carrusel">
                <!-- Diapositiva 1 -->
                <div class="slide">
                    <img src="assets/GS.png">
                </div>
                <!-- Diapositiva 2 -->
                <div class="slide">
                    <img src="assets/ciberseguridad.jpeg">
                </div>
                <!-- Diapositiva 3 -->
                <div class="slide">
                    <img src="assets/GM.jpg">
                </div>
                <!-- Botón para ir a la diapositiva anterior -->
                <a class="prev" id="prevSlide">&#10094;</a>
                <!-- Botón para ir a la siguiente diapositiva -->
                <a class="next" id="nextSlide">&#10095;</a>
            </div>

            <button>
                <a href="https://ieskursaal.es/">Mas info </a>
                <span class="overlay"></span>
            </button>
    </section>

    <!-- SECCION Valoraciones -->
    <section id="valoraciones" class="valoraciones">
    <div class="contenido-seccion">
        <h2>Valoraciones</h2>
        <div>
            <?php
            // Creamos la BD 
            $mi_contacto = new contacto(); 

            $result = $mi_contacto->join_tabla();

            $filas = $result->rowCount();
            if ($filas == 0) { //resultado query vacío
                echo "<CENTER><p>No se encuentra ninguna valoración</p></CENTER>";
            } else { //la búsqueda no es vacía
                foreach ($result as $valor) {
                    echo "<article>
                    <div class='logo'>
                        <img src='" . $valor['foto_perfil'] . "' width='5%'>
                    </div>
                    <p>
                        <span>" . htmlspecialchars($valor['nombre']) . "</span>
                        <span> - " . date('d/m/Y', strtotime($valor['hora'])) . "</span> <br>
                        <span>" . htmlspecialchars($valor['correo']) . "</span>
                    </p>
                    <div>";

        echo "
                    </div>
                    <p>" . htmlspecialchars($valor['mensaje']) . "</p><br>
                </article>";
    } // end bucle
}

            if (isset($_SESSION["login_exitoso"]) && $_SESSION["login_exitoso"] == true){
?>

        <form action="valoracion.php" method="GET" class="form_valoraciones">
            <button type="submit" class="Boton_valoraciones">
                <span class="text">Añadir valoración</span>
                <div class="overlay"></div>
            </button>
        </form>

<?php
            }
            ?>
        </div>
    </div>
</section>


    <!-- SECCION CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenido-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                    <form  id="formContacto" action="enviarEmail.php" method="POST">    
                    <label for="nombre" id="nombreLabel">Introduzca su nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tú Nombre" required="required">

                    <label for="telefono" id="telefonoLabel">Introduzca el numero de telefono:</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Número telefónico" required="required">

                    <label for="email" id="emailLabel">Introduzca el email:</label>
                    <input type="text" id="email" name="email" placeholder="Dirección de correo" required="required">

                    <label for="tema" id="temaLabel">Introduzca el curso del que deseas saber mas información:</label>
                    <input type="text" id="tema" name="tema" placeholder="Tema" required="required">

                    <textarea required="required" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>

                    <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar mensaje"/>

                </form>
                </div>
                <!-- Mapa -->
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781.5328710650856!2d-5.453040787590363!3d36.1333863118343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c94ceab185c63%3A0x831d796ff491fd6e!2sAv.%20Virgen%20de%20Europa%2C%204%2C%2011202%20Algeciras%2C%20C%C3%A1diz!5e0!3m2!1ses-419!2ses!4v1713781421568!5m2!1ses-419!2ses" width="500" height="450" style="border:0; margin-left: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

<!-- footer -->
<footer>
    <a href="#inicio" class="arriba">
        <i class="fa-solid fa-angles-up"></i>
    </a>

    <div class="footer">

        <!-- Dividir en divs 25% -->
        <div class="logo" style="width: 25%;">
            <a href="https://ieskursaal.es/"><img src="assets/logo-ies-kursaal.png" width="80px"></a>
        </div>

        <div class="informacion">
            <div class="sobre-nosotros">
                <h3 class="sobre-nosotros-header">Sobre nosotros</h3>
                <p class="sobre-nosotros-content"><a href="https://ieskursaal.es/ies-kursaal/nuestra-historia/">Nuestra historia</a></p>
            </div>
            <div class="contactos">
                <h3>Contactos</h3>
                <div class="contacto-item"><i class="fas fa-home"></i><span>Avd. Virgen de Europa 4, 11202 Algeciras (Cádiz)</span></div>
                <div class="contacto-item"><i class="fas fa-phone"></i><span>956670767 – 61</span></div>
                <div class="contacto-item"><i class="fas fa-envelope"></i><span>jefatura@ieskursaal.es</span></div>
                <div class="contacto-item"><i class="fas fa-info-circle"></i><span>Código Centro: 11000371</span></div>
            </div>
            <div class="redes-sociales" style="width: 33%;">
                <h3 class="redes-sociales-titulo">Redes Sociales</h3>
                <div class="redes">
                    <a href="https://www.facebook.com/institutokursaal/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ieskursaal/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="visitCount"></div>
<script src="scripts/script.js"></script>
</body>
</html>