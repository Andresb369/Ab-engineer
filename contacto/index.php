<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Sitio web de tecnologia, servicios de asesoramiento y diseño: 3d, pcb y prototipos de electronica, tecnologia en general , tutoriales, educacion, electronica, programacion y diseño 3D.">
    <meta name="keywords" content="diseño de tecnologías electrónicas, modelado 3D, asesoramiento y más: Ingeniería Electrónica, Diseño de Circuitos, Tecnología Electrónica, Modelado 3D, Prototipado Electrónico, Diseño de PCB, Desarrollo de Hardware, Consultoría Técnica, Diseño de Productos Electrónicos, Simulación Electrónica, Ingeniería de Sistemas Embebidos, Desarrollo de Firmware, Diseño de Cajas, Prototipado Rápido, Componentes Electrónicos, Asesoramiento Técnico, Soluciones Electrónicas, Diseño Electrónico Personalizado.">
    <title>AB ENGINEER</title>
    <link rel="icon" href="../img/AB-engineer_icon.ico">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
   
    <script src="https://kit.fontawesome.com/8f508bb75f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"></head>
<body>
<!--------------------------Menu responsive--------------------------->
    <nav class="menu">
        <section class="menu__container">
        <a href="../"><img class="logomenu" src="../assets/Ab-engineer_logo.webp" alt="Logo"></a>
            <ul class="menu__links">
                <li class="menu__item">
                    <a href="../" class="menu__link ">Inicio</a>
                </li>
                <li class="menu__item">
                    <a href="../Sobre-mi" class="menu__link ">Sobre mi</a>
                </li>
                <li class="menu__item">
                    <a href="../blog-tech" class="menu__link">Blog Tech</a>
                </li>
    
                <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link ">Servicos<img src="../assets/arrow.webp" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="../servicios/diseno_electronico_y_prototipado" class="menu__link menu__link--inside">Diseño Electrónico y Prototipado</a>
                        </li>
                        <li class="menu__inside">
                            <a href="../servicios/asesoria_y_consultoria" class="menu__link menu__link--inside">Asesoramiento y Consultoría</a>
                        </li>
                        <li class="menu__inside">
                            <a href="../servicios/desarrollo_web_y_alojamiento" class="menu__link menu__link--inside">Desarrollo Web y Alojamiento</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item  menu__item--show">
                    <a href="#" class="menu__link">Tutoriales  <img src="../assets/arrow.webp" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="../tutoriales/electronica" class="menu__link menu__link--inside">Electrónica </a>
                        </li>
                        <li class="menu__inside">
                            <a href="../tutoriales/arduino" class="menu__link menu__link--inside">Arduino</a>
                        </li>
                        <li class="menu__inside">
                            <a href="../tutoriales/proyectos" class="menu__link menu__link--inside">Proyectos</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item">
                    <a href="../contacto" class="menu__link pagina-actual">Contacto</a>
                </li>
    
            </ul>

            <div class="menu__hamburguer">
            <i class="fa-solid fa-bars fa-2xl" style="color: #7bd5f5;"></i>
               
            </div>
        </section>

      
    </nav>
<!---------------------------fin Menu responsive--------------------->
    
<!-----------------------        Contenido       ---------------------------->
<section class="heroc">
    <div class="contenido-hero">
        <h2>CONTACTAME</h2>
    </div>
</section>
<main class="contenedor sombra">
    <div class="Contenido">
        <div class="contenedor1">
            <form action="../PHP's/enviarcorreo.php" method="POST" class="form_contact">
                <h2>Enviá tu Mensaje De Contacto</h2>
                <div class="user_info">
                    <label for="names">Nombres</label>
                    <input type="text" id="names" name="nombre" placeholder="Escribe tu Nombre" pattern="[A-Za-z]{0-35}" required>

                    <label for="phone">Teléfono / Celular</label>
                    <input type="text" id="phone" name="telefono" placeholder="Escribe tu Numero" pattern="[0-9]{0-20}" required>

                    <label for="email">Correo electrónico</label>
                    <input type="text" id="email" name="email" placeholder="Escribe tu Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu Proyecto o Mensaje" required></textarea>

                    <input class="botonc" type="submit" value="Enviar Mensaje" id="btnSend">
                </div>
            </form>
        </div>
    </div>
</main>
    <!-------------------------------------------->
 <!--::::Pie de Pagina::::::-->
 <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="index.php">
                        <img src="../assets/Ab-engineer_logo.webp" alt="Logo AB">
                    </a>
                </figure>
                
            </div>

            <div class="box">
                <h2>INFORMACION DE CONTACTO</h2>
                <p><span>Correo:  </span>Ab-engineer@ab-engineer.com.co</p>
                <p><span>Telefono:  </span>3186454386</p>
                
                
            </div>

            <div class="box">
                <h2>SIGUEME</h2>
                <div class="red-social">
                <a href="https://www.facebook.com/profile.php?id=61551577642602&mibextid=ZbWKwL" class="fa-brands fa-facebook-f"></a>
                    <a href="https://instagram.com/ab_engineer.ab" class="fa fa-instagram"></a>
                    <a href="https://youtube.com/@AB-Engineer?si=uygEAVTe0gg5uFbi" class="fa fa-youtube"></a>
                    <a href="https://www.tiktok.com/@ab.engineer?_t=8fkzMvyrPVe&_r=1" class="fa-brands fa-tiktok"></a>

                    
                </div>
            </div>
        </div>
        <div class="footercorp">
            <small>&copy; 2023 <b>Andres Betancourt</b> - Todos los Derechos Reservados <b>AB ENGINEER.</b></small>
        </div>
    </footer>
    

    
    <script src="../js/app.js"></script>
    
</body>


</html>