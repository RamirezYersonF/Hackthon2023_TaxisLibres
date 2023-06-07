<?php
require "estados.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://www.taxislibres.com.co/public/images/logo-app-tl.png" type="image/x-icon">
    <title>Hackathon Taxis Libres 2023</title>
</head>

<body>
    <header class="header__hackathon">
        <section class="container__header">
            <img class="header__img" src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp"
                alt="Logo de taxis libres">
            <section class="bars__menu--background">
                <div class="bars__menu">
                    <span class="line1__bars-menu"></span>
                    <span class="line2__bars-menu"></span>
                    <span class="line3__bars-menu"></span>
                </div>
            </section>
            <nav class="nav__mobile">
                <ul class="nav__ul">
                    <section class="container__nav">
                        <li><a href="#hackathon">Hackathon</a></li>
                        <li><a href="#galeria">Galeria</a></li>
                        <li><a href="#formulario">Formulario</a></li>
                        <li><a href="#preguntas">Preguntas Frecuentes</a></li>
                    </section>
                </ul>
            </nav>
            <ul class="nav__ul--desktop">
                <section class="container__desktop">
                    <li><a href="#hackathon">Hackathon</a></li>
                    <li><a href="#galeria">Galeria</a></li>
                    <li><a href="#formulario">Formulario</a></li>
                    <li><a href="#preguntas">Preguntas Frecuentes</a></li>
                </section>
            </ul>
        </section>
    </header>
    <section class="container__hackathon">
        <div class="container__description--hackathon">
            <h1 class="title__hackathon--container">10 AL 12 DE JUNIO DEL 2023</h1>
            <a href="#formulario" class="btn__hackathon" id="hackathon">Inscripciones</a>
        </div>
        <section class="img_hackathon">

        </section>
    </section>
    <section class="container__news">
        <div class="container__size--news">
            <h1 class="title__news">Noticias</h1>
        </div>
    </section>
    <section class="container__descriptions-news">
        <section class="container__title--descriptions">
            <h2 class="information__descriptions">TaxiHack: Potenciando el Talento y la Creatividad en la Industria del
                Transporte en Colombia</h2>
        </section>
    </section>
    <section class="container__information--hackathon">
        <section class="container__size--information">

            <h2>Únete a nuestra Hackathon virtual de Taxis Libres y sé parte del impulso a la reactivación económica en
                Colombia. En este evento, buscamos soluciones innovadoras para desafíos reales en el ámbito de la
                movilidad en el país.</h2>
            <h2>La Hackathon es completamente gratuita y abierta a equipos interdisciplinarios y personas apasionadas
                por la innovación. Únete a una comunidad colaborativa y trabaja en equipo para desarrollar ideas que
                transformen la industria de la movilidad.</h2>
            <h2>Durante el evento, tendrás la oportunidad de trabajar en equipo, compartir conocimientos y aprovechar
                las últimas tecnologías para abordar desafíos reales relacionados con la movilidad en el país. Además,
                contarás con el apoyo de mentores y expertos de la industria para guiar tu desarrollo y enriquecer tu
                experiencia.</h2>
        </section>
    </section>
    <section class="container__hackathon--gallery">
        <div class="container__size--title">
            <h1 class="container_title--gallery" id="galeria">Galeria de la Hackathon</h1>
        </div>
        <section class="gallery">
            <figure class="gallery__picture gallery__picture--g1">
                <img src="https://img.lalr.co/cms/2021/05/28181950/WhatsApp-Image-2021-05-28-at-5.49.42-PM-1.jpeg?size=xl"
                    class="gallery__img" alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtCKpa4cMA6IWo71Dgla6Almt-q_4sNfrQag"
                    class="gallery__img" alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3eIPhWqfPAE_dgbVRSElNlmfZvViwZw7mxA"
                    alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcpSl3V5Q8NEisQdRg1tG40Xv8Pyh0XPqJ3w"
                    class="gallery__img" alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g5">
                <img src="https://diariolaeconomia.com/media/k2/items/cache/0b8af734c0a047336a1769996c53422b_XL.jpg"
                    class="gallery__img" alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g6">
                <img src="https://www.taxislibres.com.co/public/imagesNew/tiempo/WhatsApp-para-pedir-taxi.jpg"
                    class="gallery__img" alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g7">
                <img src="https://www.taxislibres.com.co/public/imagesNew/blog/post-hackathon.jpg" class="gallery__img"
                    alt="galeria de imagenes de las hackathon">
            </figure>
            <figure class="gallery__picture gallery__picture--g8">
                <img src="https://i.ytimg.com/vi/mcxaBBvIqgU/maxresdefault.jpg" class="gallery__img"
                    alt="galeria de imagenes de las hackathon">
            </figure>
        </section>
    </section>

    <section class="container__competitor">
        <h1 class="title__competitor">¿Quién puede participar?</h1>
        <div class="container_type--competitor">
            <div class="container__description--competitor">
                <p>Convocamos a programadores, diseñadores, data scientists, mercadólogos, economistas, financieros y a
                    todos aquellos apasionados por la innovación y la creatividad. Durante tres días, trabajaremos en
                    equipo para construir soluciones a los retos de movilidad en Colombia, utilizando las últimas
                    tecnologías, productos, herramientas y servicios de Taxis Libres y nuestros prestigiosos
                    patrocinadores y aliados.</p>
                <p>Este evento único promueve la colaboración interdisciplinaria, reuniendo mentes brillantes de
                    diferentes campos para abordar los desafíos de movilidad con una perspectiva integral. La diversidad
                    de conocimientos y enfoques enriquecerá el proceso de desarrollo, impulsando la generación de ideas
                    innovadoras y soluciones prácticas.</p>
                <p>Al unir fuerzas con Taxis Libres y nuestros patrocinadores, tendrás acceso a las más avanzadas
                    tecnologías y recursos. Esto te permitirá crear soluciones vanguardistas que impacten positivamente
                    la movilidad en Colombia. Además, este evento te brindará la oportunidad de expandir tu red
                    profesional, establecer contactos clave en la industria y potenciar tu crecimiento como experto en
                    tu campo.</p>
                <p>No pierdas la oportunidad de formar parte de esta experiencia enriquecedora, donde tu pasión y
                    talento se combinarán con el espíritu de colaboración para construir un futuro más eficiente y
                    sostenible en la movilidad. ¡Inscríbete ahora y sé parte de la transformación!</p>
            </div>
        </div>
    </section>
    <section class="container__title--awards">
        <h1>beneficios para los equipos ganadores</h1>
        <section class="container__card_awards">
            <div class="card">
                <div class="card__inner">
                    <div class="card__front">
                        <h2>Primer Lugar</h2>
                    </div>
                    <div class="card__back">
                        <h3>$5.000.000 COP</h3>
                        <p>($10.000 USD IBM Cloud)</p>
                        <p>Un teléfono Huawei.</p>
                        <p>50 viajes en taxi ($15.000 COP c/u).</p>
                        <p>1 año de licencia Platzi.</p>
                        <p>6 meses de oficinas.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card__inner">
                    <div class="card__front">
                        <h2>Segundo Lugar</h2>
                    </div>
                    <div class="card__back">
                        <h3>$3.000.000 COP</h3>
                        <p>Un teléfono Huawei.</p>
                        <p>20 viajes en taxi ($15.000 COP c/u).</p>
                        <p>6 meses de licencia para Platzi.</p>
                        <p>3 meses de oficinas.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__inner">
                    <div class="card__front">
                        <h2>Tercer Lugar</h2>
                    </div>
                    <div class="card__back">
                        <h3>$2.000.000 COP</h3>
                        <p>Un teléfono Huawei.</p>
                        <p>10 viajes en taxi ($15.000 COP c/u).</p>
                        <p>6 meses de licencia para Platzi.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="container__sponsors">
        <h1 class="title__sponsors">Patrocinadores y aliados</h1>
        <section class="amount__sponsors">
            <img src="./img/IBM.png" alt="IBM">
            <img src="./img/losandres.png" alt="Universidad de los andes">
            <img src="./img/huawei.png" alt="Huawei">
            <img src="./img/ean universidad.png" alt="Universidad EAN">
            <img src="./img/escudo-urosario.jpeg" alt="Universidad Rosario">
            <img src="./img/francisco_jose.png" alt="Universidad Francisco Jose">
            <img src="./img/platzi.png" alt="Platzi">
            <img src="./img/secretaria_movilidad.jpg" alt="Secretaria de movilidad">
        </section>
    </section>
    <section class="container__form" id="formulario">
        <?php include "validacion.php"; ?>
        <form id="formulario" method="post" action="index.php">
            <h1>Formulario de Inscripción</h1>
            <label for="tipoDocumento">Tipo de Documento:</label>
            <select id="tipoDocumento" name="tipoDocumento" required>
                <option value="tipo_de_indentificacion">Tipo de indentificación</option>
                <option value="Cedula">Cedula</option>
                <option value="cedula de Extranjeria">Cedula de Extranjeria</option>
                <option value="tarjeta de Identidad">Tarjeta de Identidad</option>
                <option value="NUIP">NUIP</option>
                <option value="Pasaporte">Pasaporte</option>
            </select>

            <label for="numeroDocumento">Número de Documento:</label>
            <input type="text" id="numeroDocumento" name="numeroDocumento" required>

            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>


            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Femenino">Transgénero</option>
                <option value="Otro">No registra</option>
            </select>
            <label for="pais" selected>País:</label>
            <input type="text" id="pais" name="pais" value="COLOMBIA *">
            <label for="">Departamentos:</label>
            <select id="id_estado" class="form-control">
                <option value="">Seleccionar Departamento</option>
                <?php
                foreach ($estados as $estado) {
                    echo '<option value="' . $estado['id_departamento'] . '">' . $estado['departamento'] . '</option>';
                }
                ?>
            </select>
            <label for="">Ciudades:</label>
            <select id="municipios" class="form-control">
                <option value="">Seleccionar Ciudad</option>
            </select>
            <input type="submit" class="btn__form" value="Enviar">
            <?php include("./validacion.php") ?>
        </form>
    </section>
    <section class="container__questions" id="preguntas">
        <h2 class="title__questions">Preguntas Frecuentes</h2>
        <div class="accordion">¿Que es una hackathon?</div>
        <div class="panel">
            <p>Una hackathon es un evento en el que programadores, diseñadores, desarrolladores y otros profesionales se
                reúnen para colaborar de manera intensiva y creativa en la creación de software o soluciones
                tecnológicas. Durante una hackathon, los participantes trabajan en equipos y tienen un tiempo limitado
                (generalmente de varias horas a varios días) para desarrollar un proyecto desde cero.</p><br>
            <p>El objetivo de una hackathon puede variar, pero generalmente implica resolver un problema o desarrollar
                una idea innovadora utilizando la tecnología. Los participantes trabajan de manera colaborativa,
                compartiendo conocimientos y habilidades para crear un producto funcional al final del evento. Esto
                implica la programación, el diseño, la planificación y la presentación de la solución.</p>
        </div>

        <div class="accordion">¿Cuál es el objetivo de la Hackathon de Taxis Libres?</div>
        <div class="panel">
            <p>Buscamos generar espacios creativos para que los colombianos puedan desarrollar sus ideas y demostrar su
                talento resolviendo uno de estos cinco aspectos claves en temas de movilidad, tecnología y
                sostenibilidad:</p> <br>

            <li>Transporte aliado para la seguridad en las ciudades.</li>
            <li>Soluciones que incrementen las utilidades a los conductores y propietarios.</li>
            <li>Soluciones donde los taxis aporten a la optimización de la logística en ciudades inteligentes.</li>
            <li>Alternativas para aportar a la conservación del medio ambiente.</li>
            <li>Soluciones que mejoren las experiencias para usuarios y conductores por medio de analítica predictiva.
        </div>

        <div class="accordion">¿Quién puede participar en la hackathon y cuándo se realizará?</div>
        <div class="panel">
            <p>Es una maratón de desarrollo virtual donde se reunirán programadores, diseñadores, data scientist's,
                mercadólogos, economistas, financieros y todos aquellos apasionados por la innovación y la creatividad.
            <p>Durante tres días harán un trabajo colaborativo, para construir soluciones a los retos propuestos de
                movilidad en Colombia contado con las últimas tecnologías, productos, herramientas y servicios de Taxis
                Libres y de nuestros patrocinadores y aliados.</p>
        </div>
    </section>
    <footer class="footer">
        <section class="container__footer">
            <section class="contenedor__img--footer">
                <img src="https://www.taxislibres.com.co/public/imagesNew/footer/logo-taxislibres.webp"
                    alt="Logo taxis libres">
            </section>
            <section class="description__footer">
                <p>Aviso legal de la página web</p>
                <p>Política de Tratamiento de Datos</p>
                <p>Aviso legal</p>
            </section>
            <section class="red__footer">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-tiktok"></i>
            </section>
            <section class="container__hackathon--cube">
                <div class="container__cube">
                    <div class="cube__faces">
                        <div class="face front"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                        <div class="face back"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                        <div class="face right"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                        <div class="face left"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                        <div class="face top"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                        <div class="face bottom"><img class="cube__icono"
                                src="https://www.taxislibres.com.co/public/imagesNew/logo-escritorio.webp" alt=""></div>
                    </div>
                </div>
            </section>
        </section>
        <p class="copyright__footer">@2023 Taxis Libres.</p>
    </footer>
    <script src="./js/main.js"></script>
    <script src="./js/connection.js"></script>
</body>

</html>