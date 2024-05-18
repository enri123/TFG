<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TFG</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <script src="script.js"></script>

    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="https://ieskursaal.es/"><img src="assets/logo-ies-kursaal.png" width="10%"></a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#cursos" onclick="seleccionar()">CURSOS</a></li>
                    <li><a href="#razones" onclick="seleccionar()">POR QUE ELEGIRNOS</a></li>
                    <li><a href="#valoraciones" onclick="seleccionar()">VALORACIONES</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
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
    </section>

        <!-- SECCION SOBRE MI -->
    <section id="cursos" class="cursos">
        <!--Basica-->
        <div class="contenedor-seccion">
            <div class="basica">
                <h2>FP Basica: Informática y Comunicaciones</h2>
                <div style="display: flex;">
                    <div class="contenido">
                        <div id="part1_basico" style="display: block;">
                            <h3>Aprendizaje</h3>

                            <ul>
                                <li>Acopiar los materiales para montaje y mantenimiento en sistemas microinformáticos y redes de transmisión de datos.</li>
                                <li>Realizar operaciones auxiliares de montaje de sistemas microinformáticos y dispositivos auxiliares con calidad.</li>
                                <li>Realizar operaciones auxiliares de mantenimiento y reparación de sistemas microinformáticos garantizando su funcionamiento.</li>
                                <li>Realizar operaciones para el almacenamiento y transporte de sistemas, periféricos y consumibles con criterios de seguridad.</li>
                                <li>Realizar comprobaciones rutinarias de verificación en el montaje y mantenimiento de sistemas y/o instalaciones.</li>
                                <li>Montar canalizaciones para cableado de datos en condiciones de calidad y seguridad.</li>
                                <li>Tender el cableado de redes de datos aplicando técnicas y procedimientos normalizados.</li>
                                <li>Manejar herramientas del entorno usuario proporcionadas por el sistema operativo y dispositivos de almacenamiento de información.</li>
                                <li>Manejar aplicaciones ofimáticas de procesador de textos para realizar documentos sencillos.</li>
                                <li>Resolver problemas predecibles relacionados con su entorno social y productivo utilizando elementos proporcionados por ciencias aplicadas y sociales.</li>
                                <li>Ejercer de manera activa y responsable los derechos y deberes derivados de su actividad profesional y su condición de ciudadano.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li>Montaje y mantenimiento de sistemas y componentes informáticos.</li>
                                <li>Operaciones auxiliares para la configuración y la explotación.</li>
                                <li>Equipos eléctricos y electrónicos.</li>
                                <li>Instalación y mantenimiento de redes para transmisión de datos.</li>
                                <li>Ciencias aplicadas I.</li>
                                <li>Ciencias aplicadas II.</li>
                                <li>Comunicación y sociedad I.</li>
                                <li>Comunicación y sociedad II.</li>
                                <li>Formación en centros de trabajo</li>
                            </ul>
                        </div>
                        <div id="part2_basico" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p>El acceso a los ciclos de Formación Profesional Básica requerirá el cumplimiento simultáneo de las siguientes condiciones:</p>
                            <ul>
                                <li>Tener cumplidos quince años, o cumplirlos durante el año natural en curso, y no superar los diecisiete años de edad en el momento del acceso o durante el año natural en curso</li>
                                <li>Haber cursado el primer ciclo de Educación Secundaria Obligatoria o, excepcionalmente, haber cursado el segundo curso de la Educación Secundaria Obligatoria.</li>
                                <li>Haber propuesto el equipo docente a los padres, madres o tutores legales la incorporación del alumno o alumna a un ciclo de Formación Profesional Básica.</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <p>Ejercer la activividad por cuenta ajena en empresas dedicadas a la comercialización, montaje, mantenimiento y reparación de sistemas microinformáticos, equipos eléctricos o electrónicos y en empresas que utilicen sistemas informáticos, para su gestión.</p>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="assets/kursaal-inicio-hero.jpeg">
                    </div>
                </div>
                <button onclick="saber_mas_basica()">
                    Saber mas 
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
        <!--Medio-->
        <div class="contenedor-seccion">
            <div class="medio">
                <h2>Grado Medio: Sistemas Microinformáticos y redes</h2>
                <!-- Contenido de la sección medio -->
                <div style="display: flex;">
                    <div class="imagen">
                        <img src="assets/kursaal-inicio-hero.jpeg">
                    </div>
                    <div class="contenido">
                        <div id="part1_medio" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li>Instalar y configurar software básico y de aplicación, redes locales cableadas, inalámbricas o mixtas y conectadas a redes públicas.</li>
                                <li>Instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</li>
                                <li>Montar y configurar ordenadores y periféricos.</li>
                                <li>Determinar la logística asociada a las operaciones de instalación, configuración y mantenimiento de sistemas microinformáticos.</li>
                                <li>Diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales.</li>
                                <li>Replantear el cableado y la electrónica de redes locales en pequeños entornos y su conexión con redes de área extensa.</li>
                                <li>Ejecutar procedimientos establecidos de recuperación de datos y aplicaciones ante fallos y pérdidas de datos en el sistema.</li>
                                <li>Elaborar documentación técnica y administrativa del sistema, elaborar presupuestos y asesorar al cliente.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li>Montaje y mantenimiento de equipo.</li>
                                <li>Sistemas operativos monopuesto.</li>
                                <li>Aplicaciones ofimáticas.</li>
                                <li>Formación y orientación laboral.</li>
                                <li>Redes locales.</li>
                                <li>Seguridad informática.</li>
                                <li>Servicios en red.</li>
                                <li>Aplicaciones web.</li>
                                <li>Sistemas operativos en red.(1)</li>
                                <li>Empresa e iniciativa emprendedora</li>
                                <li>Formación en centros de trabajo</li>
                            </ul>
                        </div>
                        <div id="part2_medio" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Acceso directo:</strong></p>
                            <ul>
                                <li>Estar en posesión del<strong> título de Graduado en Educación Secundaria Obligatoria</strong> o de un nivel académico superior.</li>
                                <li>Estar en posesión de un Título Profesional Básico (Formación Profesional Básica).</li>
                                <li>Estar en posesión de un título de Técnico o de Técnico Auxiliar o equivalente a efectos académicos.</li>
                                <li>Haber superado el segundo curso del Bachillerato Unificado y Polivalente (BUP).</li>
                                <li>Haber superado la prueba de acceso a la Universidad para mayores de 25 años.</li>
                            </ul>
                            <p><strong>Acceso mediante prueba:</strong></p>
                            <ul>
                                <li>Haber superado la prueba de acceso a ciclos formativos de grado medio (se requerirá tener, al menos, diecisiete años, cumplidos en el año de realización de la prueba).</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <ul>
                                <li>Instalador-reparador de equipos informáticos.</li>
                                <li>Técnico de soporte informático.</li>
                                <li>Técnico de redes de datos.</li>
                                <li>Reparador de periféricos de sistemas microinformáticos.</li>
                                <li>Comercial de microinformática.</li>
                                <li>Operador de tele-asistencia.</li>
                                <li>Operador de sistemas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="saber_mas_medio()">
                    Saber mas 
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
        <!--Superior-->
        <div class="contenedor-seccion">
            <div class="superior">
                <!-- Contenido de la sección superior -->
                <h2>Grado Superior: Desarrollo de aplicaciones web</h2>
                <div style="display: flex;">
                    <div class="contenido">
                        <div id="part1_superior" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li>Configurar y explotar sistemas informáticos, adaptando la configuración lógica del sistema según las necesidades de uso y los criterios establecidos.</li>
                                <li>Aplicar técnicas y procedimientos relacionados con la seguridad en sistemas, servicios y aplicaciones, cumpliendo el plan de seguridad.</li>
                                <li>Gestionar servidores de aplicaciones adaptando su configuración en cada caso para permitir el despliegue de aplicaciones web.</li>
                                <li>Gestionar bases de datos, interpretando su diseño lógico y verificando integridad, consistencia, seguridad y accesibilidad de los datos.</li>
                                <li>Desarrollar aplicaciones web con acceso a bases de datos utilizando lenguajes, objetos de acceso y herramientas de mapeo adecuados a las especificaciones.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li>Sistemas informaticos.</li>
                                <li>Base de datos.</li>
                                <li>Programación.</li>
                                <li>Lenguajes de marcas y sistemas de gestión de información.</li>
                                <li>Entornos de desarrollo.</li>
                                <li>Desarrollo web en entorno cliente.</li>
                                <li>Desarrollo web en entorno servidor.</li>
                                <li>Despliegue de aplicaciones web.</li>
                                <li>Diseño de interfaces web.</li>
                                <li>Proyecto de desarrollo de aplicaciones web.</li>
                                <li>Formación y orientación laboral.</li>
                                <li>Empresa e iniciativa emprendedora.</li>
                                <li>Formación en centros de trabajo.</li>
                                <li>Formación en centros de trabajo.</li>
                                <li>Horas de libre configuración.</li>
                            </ul>
                        </div>
                        <div id="part2_superior" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Requisitos de acceso:</strong>Para acceder a los ciclos formativos de grado superior se requerirá una de las siguientes condiciones:</p>
                            <ol>
                                <li>Estar en posesión de, al menos, uno de los siguientes títulos:
                           <ol>
                                <li>Título de Bachiller.</li>
                                <li>Título de Técnico de Grado Medio de Formación Profesional.</li>
                                <li>Título de Técnico Superior de Formación Profesional.</li>
                                <li>Título de grado universitario.</li>
                           </ol>
                           </li>
                                <li>Haber superado una prueba de acceso a ciclos formativos de grado superior y tener diecinueve años como mínimo, cumplidos en el año de realización de la prueba, o haber superado la prueba de acceso a la universidad para mayores de 25 años.</li>
                                <li>Haber superado un curso de formación específico preparatorio para el acceso a ciclos formativos de grado superior en centros públicos o privados autorizados por la administración educativa, tener diecinueve años como mínimo, cumplidos en el año de realización del curso.</li>
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
                        <img src="assets/kursaal-inicio-hero.jpeg">
                    </div>
                </div>
                <button onclick="saber_mas_superior()">
                    Saber mas 
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
        <!--Especialización-->
        <div class="contenedor-seccion">
            <div class="especializacion">
                <!-- Contenido de la sección especialización -->
                <h2>Especialización: Ciberseguridad</h2>
                <div style="display: flex;">
                    <div class="imagen">
                        <img src="assets/kursaal-inicio-hero.jpeg">
                    </div>
                    <div class="contenido">
                        <div id="part1_especializacion" style=" display: block;">
                            <h3>Aprendizaje</h3>
                            <ul>
                                <li>Elaborar e implementar planes de prevención y concienciación en ciberseguridad en la organización, aplicando la normativa vigente.</li>
                                <li>Detectar e investigar incidentes de ciberseguridad, documentándolos e incluyéndolos en los planes de securización de la organización.</li>
                                <li>Diseñar planes de securización contemplando las mejores prácticas para el bastionado de sistemas y redes.</li>
                                <li>Diseñar y administrar sistemas informáticos en red y aplicar las políticas de seguridad establecidas, garantizando la funcionalidad requerida con un nivel de riesgo controlado.</li>
                                <li>Analizar el nivel de seguridad requerido por las aplicaciones y los vectores de ataque más habituales, evitando incidentes de ciberseguridad.</li>
                                <li>Implantar sistemas seguros de despliegue de software con la adecuada coordinación entre los desarrolladores y los responsables de la operación del software.</li>
                                <li>Realizar análisis forenses informáticos analizando y registrando la información relevante relacionada.</li>
                                <li>Detectar vulnerabilidades en sistemas, redes y aplicaciones, evaluando los riesgos asociados.</li>
                                <li>Definir y aplicar procedimientos para el cumplimiento normativo en materia de ciberseguridad y de protección de datos personales, implementándolos tanto internamente como en relación con terceros.</li>
                            </ul>
                        </br>
                            <h3>Plan de formación</h3>
                            <p>Los módulos de este ciclo formativo son los siguientes:</p>
                            <ul>
                                <li>Incidentes de ciberseguridad.</li>
                                <li>Bastionado de redes y sistemas.</li>
                                <li>Puesta en producción segura.</li>
                                <li>Análisis forense informático.</li>
                                <li>Hacking ético.</li>
                                <li>Normativa de ciberseguridad.</li>
                            </ul>
                        </div>
                        <div id="part2_especializacion" style="display: none;">
                            <h3>Requisitos de Acceso</h3>
                            <p><strong>Los títulos que dan acceso a este curso de especialización son los siguientes:</strong></p>
                            <ul>
                                <li>Título de Técnico Superior en Administración de Sistemas Informáticos en Red establecido por el Real Decreto 1629/2009, de 30 de octubre.</li>
                                <li>Título de Técnico Superior en Desarrollo de Aplicaciones Multiplataforma, establecido por el Real Decreto 450/2010, de 16 de abril.</li>
                                <li>Título de Técnico Superior en Desarrollo de Aplicaciones Web, establecido por el Real Decreto 686/2010, de 20 de mayo.</li>
                                <li>Título de Técnico Superior en Sistemas de Telecomunicaciones e Informáticos, establecido por el Real Decreto 883/2011, de 24 de junio.</li>
                                <li>Título de Técnico Superior en Mantenimiento Electrónico establecido por el Real Decreto 1578/2011, de 4 de noviembre</li>
                            </ul>
                        </br>
                            <h3>Salida Laboral</h3>
                            <p>Este profesional ejercerá su actividad en entidades de los sectores donde sea necesario establecer mecanismos y medidas para la protección de los sistemas de información y redes de comunicaciones, trabajando como:</p>
                            <ul>
                                <li>Experto/a en ciberseguridad.</li>
                                <li>Auditor/a de ciberseguridad.</li>
                                <li>Consultor/a de ciberseguridad.</li>
                                <li>Hacker ético.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="saber_mas_especializacion()">
                    Saber mas 
                    <span class="overlay"></span>
                </button>
            </div>
        </div>
    
    </section>
    

    <!-- SECCION Por que estudiar con nosotros -->
    <section class="razones" id="razones">
        <div class="contenido-seccion">
            <h2>Por que estudiar con nosotros</h2>
            <br>             
            El Instituto de Educación Secundaria (IES) Kursaal se sitúa como un faro de aprendizaje, orientando a los jóvenes hacia un futuro brillante. Con una rica historia en la enseñanza y un compromiso de excelencia, es reconocido por su ambiente de aprendizaje estimulante y respetuoso.</br></br>
            En IES Kursaal, los estudiantes son el corazón de todo lo que hacemos. Nuestro currículo integral y actualizado garantiza que cada alumno adquiera las habilidades y conocimientos necesarios para prosperar en el siglo XXI. Nuestro personal docente, altamente calificado y dedicado, trabaja incansablemente para garantizar el éxito de cada estudiante.</br></br>
            Con un enfoque claro en la innovación, el IES Kursaal fomenta el pensamiento crítico, la creatividad y la resolución de problemas a través de su amplia gama de asignaturas. Nuestro instituto promueve el desarrollo personal de los estudiantes, fomentando valores como la responsabilidad, la tolerancia y el respeto.</br></br>
            En el IES Kursaal creemos firmemente en la importancia de la comunidad. Fomentamos la participación activa de los padres y las familias, creando una red de apoyo sólida y duradera que respalda a cada uno de nuestros estudiantes. En el IES Kursaal, formamos más que estudiantes: construimos el futuro.</br>
            </p>
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
            require("contacto.php");
            // Creamos la BD 
            $mi_contacto = new contacto(); 

            $sql_script = "SELECT * FROM valoraciones";
            $resultado = $mi_contacto->ejecuta_SQL($sql_script);

            $filas = $resultado->rowCount();
            if ($filas == 0) { //resultado query vacío
                echo "<CENTER><p>No se encuentra ninguna valoración</p></CENTER>";
            } else { //la búsqueda no es vacía
                foreach ($resultado as $valor) {
                    echo "<article class='comments-media'>
                                <div class='logo'>
                                    <img src='" . $valor['foto_perfil'] . "' loading='lazy' onerror=\"this.onerror=null;this.src='https://www.game.es/Content/img/no_disponible.png';\" class='img-circle' alt='Usuario' width='5%'>
                                </div>
                                <p class='comments-media-heading'>
                                    <span class='cm-txt u-caps'>" . $valor['nombre'] . "</span>
                                    <span class='cm-txt text-muted'> - " . date('d/m/Y H:i:s', strtotime($valor['hora'])) . "</span>
                                </p>
                                <div class='reviews-points-s points-4 comments-points'>";
                    // Aquí podrías agregar la lógica para mostrar las estrellas según la valoración
                    echo "
                                </div>
                                <p class='p comments-media-p'>" . $valor['mensaje'] . "</p>
                            </article>";
                } // end bucle
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
        
        </div>
    </footer>

</body>
</html>