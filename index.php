<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<section class="presentacion">
    <div class="contenido-presentacion">
        <img loading="lazy" class="perfil-img" src="src/img/ui/perfil-960.webp" alt="">

        <div class="presentacion-texto">
            <h2>Hola, soy Benja</h2>
            <p>Ingeniero de Sistemas y Desarrollador de aplicaciones web. Me encantaría tener la oportunidad de contribuir a tus proyectos. ¡No dudes en contactarme!</p>

            <div class="presentacion-enlaces">
                <a href="mailto:begalan&#64outlook.es" target="_blank">Contáctame<img loading="lazy"
                        src="src/img/icons/email (2).svg" alt=""></a>
                <a href="https://www.linkedin.com/in/benjam%C3%ADn-gal%C3%A1n-9346ba297/"
                    target="_blank">LinkedIn<img loading="lazy" src="src/img/icons/linkedin-svgrepo-com (1).svg"
                        alt=""></a>
            </div>
        </div>
    </div>
</section>

<section class="proyectos" id="proyectos">
    <h2>Proyectos</h2>

    <?php incluirTemplate('proyectos'); ?>
</section>

<section class="about" id="about">
    <h2>Sobre mi</h2>

    <div class="sobre-mi">
        <div class="texto-sobremi">
            <p>Me llamo Benjamín Galán Díaz. Estoy cursando mi último año de Ingeniería en Sistemas en la Universidad Nacional 
                Politécnica, enfocando mi carrera en el desarrollo web. Descubrí que me encantaba cuando lo cursé en mi último 
                semestre; desde entonces, no he parado de practicar.</p> 
            <br> 
            <p>Creo proyectos para desarrollar mis habilidades y siempre estoy aprendiendo para fortalecer mi conocimiento. 
                Deseo convertirme en un excelente desarrollador</p>
        </div>

        <div class="video-yt">
            <img src="src/img/ui/man-work-2.png" alt="">
        </div>
    </div>

    <h4>Las tecnologías y herramientas que utilizo en mis proyectos</h4>

    <div class="tecnologias">
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>Git</li>
            <li>Npm</li>
            <li>Composer</li>
        </ul>
    </div>
</section>

<section class="contenedor contact" id="contact">
    <h2>Contacto</h2>

    <div class="contenido-contacto">
        <div class="contacto">
            <div class="info-contacto">
                <img loading="lazy" src="src/img/icons/location (3).svg" alt="">
                <p>Managua, Nicaragua</p>
            </div>

            <div class="info-contacto">
                <img loading="lazy" src="src/img/icons/email.svg" alt="">
                <p>begalan@outlook.es</p>
            </div>

            <div class="info-contacto">
                <img loading="lazy" src="src/img/icons/call.svg" alt="">
                <p>+505 88476321</p>
            </div>
        </div>

        <form action="" class="formulario-contacto">
            <legend>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu nombre">

                <label for="email">Correo</label>
                <input type="email" id="email" placeholder="Tu correo">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje" placeholder="Deja un mensaje"></textarea>
            </legend>
            <input type="submit" value="Enviar">
        </form>
    </div>
</section>

<?php
incluirTemplate('footer');
?>